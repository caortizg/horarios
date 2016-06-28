<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Caog\HorariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Caog\HorariosBundle\Entity\ActividadFranja;
use Caog\HorariosBundle\Entity\ActividadEmpresa;
use Caog\HorariosBundle\Form\ActividadFranjaVincularType;

/**
 * Description of ActividadEmpresaController
 *
 * @author Carlos
 */
class ActividadFranjaController extends Controller{

    public function vincularAction(Request $request,$id){
        $actividad=new ActividadEmpresa();
        $actividad_empresa= $this->getDoctrine()
                ->getRepository('CaogHorariosBundle:ActividadEmpresa')
                ->find($id);
        if (!$actividad_empresa) {
            throw $this->createNotFoundException('No task found for id '.$id);
        }
//        $form = $this->createForm(ActividadFranjaVincularType::class,$actividad_empresa);
        $form = $this->createForm(ActividadFranjaVincularType::class);
        $form->handleRequest($request);
        
        if($request->isMethod('POST')){
            $data=$form->getData();
            
            $em=$this->getDoctrine()->getManager();
            $franjas_current=$this->getDoctrine()
                ->getRepository('CaogHorariosBundle:ActividadFranja')
                ->findBy(array('actEmp'=>$actividad_empresa));
            foreach($franjas_current as $franja){
                $em->remove($franja);
                $em->flush();
            }
            foreach($data['actividadfranja'] as $franja){
                $franja->setActEmp($actividad_empresa);
                
                $em->persist($franja);
                $em->flush();
                
            }
//            dump($data['actividadfranja']);
//            die;
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Información Adicionada!');
//            return $this->redirect($this->generateUrl('mejoras_crear'));
        }
        $franjas_current=$this->getDoctrine()
                ->getRepository('CaogHorariosBundle:ActividadFranja')
                ->findBy(array('actEmp'=>$actividad_empresa));
        return $this->render('CaogHorariosBundle:Empresa:Actividad/vincular.html.twig', 
                array(
                    'form' => $form->createView(),
                    'franjas'=>$franjas_current,
                ));
    }
    public function createAction($idUser){
        $dM = 60*24;
        $repository = $this->getDoctrine()
            ->getRepository('CaogHorariosBundle:ActividadFranja');
 
        $query = $repository->createQueryBuilder('af')
            ->leftJoin('CaogHorariosBundle:ActividadUsuario','au',"WITH",'af.actUsu = au.id')
            ->where('au.usuario = '.$idUser)
            ->orderBy('af.actFraDia', 'ASC')
            ->orderBy('af.actHoraInicio', 'ASC')
            ->getQuery();
        $franjas = $query->getResult();
        $diasLibre = array();
        for ($i=1;$i<=7;$i++){
            $tiempoInicio = 0;
            $diaLible = array();
            foreach($franjas as $franja){
                if($franja->getActFraDia()==$i){
                    $hi = $franja->getActHoraInicio()->getTimestamp();
                    $tiempoInicioAux = (idate('H',$hi)*60)+idate('i',$hi);
                    $tL = $tiempoInicioAux - $tiempoInicio;
                    $tO = $franja->getActFraDuracion();
                    if($tL>0){
                        $diaLible[] = array(
                            'direccionActividadA'   => $franja->getActUsu(),
                            'dia'                   => $i,
                            'tiempoDiponible'       => $tL,
                            'tiempoInicio'          => $tiempoInicio,
                            'tiempoFinalizacion'    => $tiempoInicioAux
                        );
                    }
                    $tiempoInicio = $tiempoInicioAux + $tO;
                }
            }
            if(($dM-$tiempoInicio)>0){
                $diaLible[] = array(
                    'direccionActividadA'   => $franja->getActUsu(),
                    'dia'                   => $i,
                    'tiempoDiponible'       => ($dM-$tiempoInicio),
                    'tiempoInicio'          => $tiempoInicio,
                    'tiempoFinalizacion'    => $dM
                );
            }
            $diasLibre[]=$diaLible;
        }
        $repository2 = $this->getDoctrine()
            ->getRepository('CaogHorariosBundle:ActividadUsuario');
 
        $query2 = $repository2->createQueryBuilder('au')
            ->where('au.usuario = '.$idUser)
            ->andWhere('au.tipo = 2')
            ->andWhere("au.estado <> 1")
            ->orderBy('au.prioridad', 'DESC')
            ->getQuery();
        $actividadesP = $query2->getResult();
        foreach ($actividadesP as $actividaU){
            $this->crearFranja($actividaU, $diasLibre);
        }
        $response = $this->forward('CaogHorariosBundle:Usuario:timetable', array(
            'id' => $idUser
        ));
        return $response;
    }
    private function crearFranja($actividaU,&$diasLibre){
        $actividaE=$actividaU->getActividadEmpresa();
        $tiempoMD = $actividaE->getTiempoMDiario();
        $tiempoMS = $actividaE->getTiempoMSemanal();
        $direccion = $this->getAddress($actividaE);
        $true = false;
        $dt=0;
        foreach ($diasLibre as $key1=>$diaLibre){
            if($dt>=$tiempoMS)break;
            foreach ($diaLibre as $key2=>$libre){
                $tiempoTranporte = $this->solicitudHTTP(
                        $direccion, 
                        $this->getAddress($libre['direccionActividadA']),
                        $libre['tiempoInicio']
                        )/60;
                if(($libre['tiempoDiponible']-$tiempoTranporte)>$tiempoMD){
                    $hi = new \DateTime();
                    $hi->setTime((int)$libre['tiempoInicio']/60, (int)$libre['tiempoInicio']%60, 0);
                    $franja = new ActividadFranja();
                    $franja->setActUsu($actividaU);
                    $franja->setActFraDia($libre['dia']);
                    $franja->setActFraDuracion($tiempoTranporte+16);
                    $franja->setActHoraInicio($hi);
                    $franja->setActFraEstado(1);                
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($franja);
                    $em->flush();
                    $hi->setTime((int)(($libre['tiempoInicio']+$tiempoTranporte+16)/60), (int)(($libre['tiempoInicio']+$tiempoTranporte+16)%60), 0);
                    $franja = new ActividadFranja();
                    $franja->setActUsu($actividaU);
                    $franja->setActFraDia($libre['dia']);
                    $duracion =((int)($libre['tiempoDiponible']-$tiempoTranporte+16)/60) > 2? 2:((int)($libre['tiempoDiponible']-$tiempoTranporte+16)/60);
                    $duracion =$duracion*60 ;
                    $franja->setActFraDuracion($duracion);
                    $franja->setActHoraInicio($hi);
                    $franja->setActFraEstado(1); 
                    $em->persist($franja);
                    $em->flush();
                    $dt+= $duracion;
                    $diasLibre[$key1][$key2] = array(
                            'direccionActividadA'   => $diasLibre[$key1][$key2]['direccionActividadA'],
                            'dia'                   => $diasLibre[$key1][$key2]['dia'],
                            'tiempoDiponible'       => $diasLibre[$key1][$key2]['tiempoDiponible']-($tiempoTranporte+16)-$duracion,
                            'tiempoInicio'          => $diasLibre[$key1][$key2]['tiempoInicio']+($tiempoTranporte+16)+$duracion,
                            'tiempoFinalizacion'    => $diasLibre[$key1][$key2]['tiempoFinalizacion']
                        );
                    $actividaU->setEstado(1);
                    $em->persist($actividaU);
                    $em->flush();
                    break;
                }
            }
        }
    }
    private function getAddress($actividad){
        $direccion = $actividad->getPais().' ';
        $direccion.= $actividad->getDepartamento().' ';
        $direccion.= $actividad->getCiudad().' ';
        $direccion.= $actividad->getlocalidad().' ';
        $direccion.= $actividad->getdireccion();
        return $direccion;
    }
    private function solicitudHTTP($origins,$destinations,$hour){
        $hora = new \DateTime();
        $hora->setDate(getdate()['year'], getdate()['mon'], getdate()['mday']+1);
        $hora->setTime(0, 0, 0);
        $hora = $hora->getTimestamp();
        $hora+=($hour*60);
        $url='https://maps.googleapis.com/maps/api/distancematrix/json?';
        $url.='origins='.urlencode($origins).'&';
        $url.='destinations='.urlencode($destinations).'&';
        $url.='departure_time='.urlencode($hora).'&';
        $url.='mode=driving&';
        $url.='key=AIzaSyA4L83Ewj9fwxBie8b2B_d0ii1wADB0uzQ';
        $json = file_get_contents($url);
        $data = json_decode($json, TRUE);
        return ($data['rows'][0]['elements'][0]['duration_in_traffic']['value']);
    }
}



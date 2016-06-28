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
    public function createAction($id){
        $repository = $this->getDoctrine()
            ->getRepository('CaogHorariosBundle:ActividadFranja');
 
        $query = $repository->createQueryBuilder('af')
            ->leftJoin('CaogHorariosBundle:ActividadUsuario','au',"WITH",'af.actUsu = au.id')
            ->where('au.usuario = '.$id)
            ->orderBy('af.actFraDia', 'ASC')
            ->orderBy('af.actHoraInicio', 'ASC')
            ->getQuery();
        $franjas = $query->getResult();
        /*
        for ($i=0;$i<7;$i++){
            $hInicio = '00:00';
            foreach($franjas as $franja){
                $franja['']
            }
        }
        return $this->render(
                'CaogHorariosBundle:User:horario.html.twig',
                array('franjas'=>$query->getResult())
                );*/
    }
}



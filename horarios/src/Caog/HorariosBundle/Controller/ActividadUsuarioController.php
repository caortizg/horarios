<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Caog\HorariosBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Caog\HorariosBundle\Entity\ActividadUsuario;
use Caog\HorariosBundle\Form\Empresa\ActividadType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Caog\HorariosBundle\Form\ActividadFranjaVincularType;

/**
 * Description of ActividadUsuarioController
 *
 * @author Carlos
 */
class ActividadUsuarioController extends Controller{
    public function listAction($id){
        $usuario = $this->getDoctrine()
                ->getRepository('CaogHorariosBundle:Usuario')
                ->find($id);
        $actividades = $this->getDoctrine()
                ->getRepository('CaogHorariosBundle:ActividadUsuario')
                ->findBy(array('usuario'=>$usuario));
        
        return $this->render(
                'CaogHorariosBundle:User:Actividad/list.html.twig',
                array('actividades'=>$actividades)
                );
    }
    public function registrarAction(Request $request, $id){
        $em=$this->getDoctrine()->getManager();
        $usuario = $this->getDoctrine()
            ->getRepository('CaogHorariosBundle:Usuario')
            ->find($id);
        $actividad = new ActividadUsuario();
        $form = $this->createForm(ActividadType::class, $actividad);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $actividad->setUsuario($usuario);
            $em->persist($actividad);
            $em->flush();
            return $this->render(
                    'CaogHorariosBundle:User:Actividad/registered.html.twig',
                    array('usuario'=>$usuario,'actividad'=>$actividad)
                );
        }
        return $this->render(
                    'CaogHorariosBundle:User:Actividad/register.html.twig',
                    array(
                        'form'=>$form->createView(),
                        'titleBody'=>'Registrar Actividad - '. $usuario->getNombre().' '.$usuario->getApellidos()
                    )
                );
    }
    public function vincularAction(Request $request,$id){
        $actividad_usuario=new ActividadUsuario();
        $actividad_usuario= $this->getDoctrine()
                ->getRepository('CaogHorariosBundle:ActividadUsuario')
                ->find($id);
        if (!$actividad_usuario) {
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
                ->findBy(array('actUsu'=>$actividad_usuario));
            foreach($franjas_current as $franja){
                $em->remove($franja);
                $em->flush();
            }
            foreach($data['actividadfranja'] as $franja){
                $franja->setActUsu($actividad_usuario);
                
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
                ->findBy(array('actUsu'=>$actividad_usuario));
        return $this->render('CaogHorariosBundle:Empresa:Actividad/vincular.html.twig', 
                array(
                    'form' => $form->createView(),
                    'franjas'=>$franjas_current,
                ));
        
    }
}

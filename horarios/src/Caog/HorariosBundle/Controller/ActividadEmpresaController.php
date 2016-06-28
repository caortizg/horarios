<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Caog\HorariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Caog\HorariosBundle\Entity\ActividadEmpresa;
use Caog\HorariosBundle\Form\Empresa\ActividadType;

/**
 * Description of ActividadEmpresaController
 *
 * @author Carlos
 */
class ActividadEmpresaController extends Controller{
    public function listAction($idEmpresa){
        $empresa = $this->getDoctrine()
                ->getRepository('CaogHorariosBundle:Empresa')
                ->find($idEmpresa);
        $actividad = $this->getDoctrine()
                ->getRepository('CaogHorariosBundle:ActividadEmpresa');
        $actividad = $idEmpresa === 0 ? $actividad->findAll():$actividad->findByEmpresa($empresa);
        return $this->render(
                'CaogHorariosBundle:Empresa:Actividad/list.html.twig',
                array('actividades'=>$actividad)
                );
    }
    public function registrarAction(Request $request,$idEmpresa){
        $parametros = array();
        $actividad = new ActividadEmpresa();
        $empresa = $this->getDoctrine()
            ->getRepository('CaogHorariosBundle:Empresa')
            ->find($idEmpresa);
        $actividad->setEmpresa($empresa);
        $form = $this->createForm(ActividadType::class, $actividad);
        $parametros['empresa']= $empresa;
        $parametros['form']= $form->createView();
        $parametros['titleBody']= 'Registrar Actividad - '.$empresa->getNombre();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actividad);
            $em->flush();
            return $this->render(
                    'CaogHorariosBundle:Empresa:Actividad/registered.html.twig',
                    array('empresa'=>$empresa,'actividad'=>$actividad)
                );
        }else
        if ($form->isSubmitted()){
            $parametros['alertPR']= array('type'=>'danger','message'=>'Hay datos incorrectos');
        }
        return $this->render(
                    'CaogHorariosBundle:Empresa:Actividad/register.html.twig',
                    $parametros
                );
    }
    
    public function getActividadEmpresaAjaxAction(Request $request){
         $res=array();
        if($request->isMethod('POST')){
            $empresa_id=$request->get('empresa_id');
            $actividad_empresa= $this->getDoctrine()
            ->getRepository('CaogHorariosBundle:ActividadEmpresa')
            ->findBy(array('empresa'=>$empresa_id));
            foreach($actividad_empresa as $actividad){
               $res[]=array('id'=>$actividad->getId(),'name'=>$actividad->getNombre());
            }
            
        }
        $response = new Response(json_encode($res));
        $response->headers->set('Content-Type', 'application/json');
       
        return $response;
    }
    public function getActividadEmpresaAction(Request $request){
        $res=array();
        if($request->isMethod('POST')){
            $actividad_id=$request->get('actividad_id');
            $actividad_empresa= $this->getDoctrine()
            ->getRepository('CaogHorariosBundle:ActividadEmpresa')
            ->find($actividad_id);
            
            $res=array(
                'pais'=>$actividad_empresa->getPais(),
                'departamento'=>$actividad_empresa->getDepartamento(),
                'ciudad'=>$actividad_empresa->getCiudad(),
                'localidad'=>$actividad_empresa->getLocalidad(),
                'direccion'=>$actividad_empresa->getLocalidad()
                );
            
            
        }
        $response = new Response(json_encode($res));
        $response->headers->set('Content-Type', 'application/json');
       
        return $response; 
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Caog\HorariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
}

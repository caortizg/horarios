<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Caog\HorariosBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Caog\HorariosBundle\Entity\Empresa;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Caog\HorariosBundle\Form\Empresa\EmpresaType;
/**
 * Description of UserController
 *
 * @author Carlos
 */
class EmpresaController extends Controller{
    public function listAction(){
        $empresa = $this->getDoctrine()
                ->getRepository('CaogHorariosBundle:Empresa')
                ->findAll();
        return $this->render(
                'CaogHorariosBundle:Empresa:list.html.twig',
                array('empresas'=>$empresa)
                );
    }
    public function registrarAction(Request $request){
        $parametros = array();
        $empresa = new Empresa();
        $form = $this->createForm(EmpresaType::class, $empresa);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($empresa);
            $em->flush();
            return $this->render(
                    'CaogHorariosBundle:Empresa:registered.html.twig',
                    array('empresa'=>$empresa)
                );
        }else
        if ($form->isSubmitted()){
            $parametros['alertPR']= array('type'=>'danger','message'=>'Hay datos incorrectos');
        }
        $parametros['form']= $form->createView();
        return $this->render(
                    'CaogHorariosBundle:Empresa:register.html.twig',
                    $parametros
                );
    }
}

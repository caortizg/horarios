<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Caog\HorariosBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Caog\HorariosBundle\Entity\Usuario;
use Caog\HorariosBundle\Form\Usuario\UsuarioType;

/**
 * Description of UserController
 *
 * @author Carlos
 */
class UsuarioController extends Controller{
    public function listAction(){
        $usuario = $this->getDoctrine()
                ->getRepository('CaogHorariosBundle:Usuario')
                ->findAll();
        return $this->render(
                'CaogHorariosBundle:User:list.html.twig',
                array('usuarios'=>$usuario)
                );
    }
    public function registrarAction(Request $request){
        $usuario = new Usuario();
        $form = $this->createForm(UsuarioType::class, $usuario);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            return $this->render(
                    'CaogHorariosBundle:User:registered.html.twig',
                    array('usuario'=>$usuario)
                );
        }else
        if ($form->isSubmitted()){
            $parametros['alertPR']= array('type'=>'danger','message'=>'Hay datos incorrectos');
        }
        $parametros['form']= $form->createView();
        return $this->render(
                    'CaogHorariosBundle:User:register.html.twig',
                    $parametros
                );
        
    }
}

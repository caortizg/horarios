<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Caog\HorariosBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Caog\HorariosBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
        
        $form = $this->createFormBuilder($usuario)
            ->add('nombre', TextType::class)
            ->add('apellidos', TextType::class)
            ->add('edad', NumberType::class)
            ->add('pais', TextType::class)
            ->add('departamento', TextType::class)
            ->add('ciudad', TextType::class)
            ->add('localidad', TextType::class)
            ->add('direccion', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Crear usuario'))
            ->getForm();
        
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

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
    public function registrarAction(Request $request){
        $usuario = new Usuario();
        
        $form = $this->createFormBuilder($usuario)
            ->add('nombre', TextType::class)
            ->add('apellidos', TextType::class)
            ->add('edad', NumberType::class)
            ->add('save', SubmitType::class, array('label' => 'Crear usuario'))
            ->getForm();
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // ... perform some action, such as saving the task to the database

            echo 1;
        }
        return $this->render(
                    'CaogHorariosBundle:User:register.html.twig',
                    array(
                        'form' => $form->createView(),
                    )
                );
    }
}

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

/**
 * Description of ActividadUsuarioController
 *
 * @author Carlos
 */
class ActividadUsuarioController extends Controller{
    public function registrarAction(){
        $parametros = array();
        $actividad = new ActividadUsuario();
        $form = $this->createForm(ActividadType::class, $actividad);
        $parametros['form']= $form->createView();
        $parametros['titleBody']= 'Registrar Actividad - Usuario';
        return $this->render(
                    'CaogHorariosBundle:Empresa:Actividad/register.html.twig',
                    $parametros
                );
    }
}

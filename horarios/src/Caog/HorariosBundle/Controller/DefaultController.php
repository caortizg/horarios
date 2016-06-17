<?php

namespace Caog\HorariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CaogHorariosBundle:Default:index.html.twig');
    }
}

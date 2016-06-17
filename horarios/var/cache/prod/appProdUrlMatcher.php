<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // caog_horarios_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'caog_horarios_homepage');
            }

            return array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'caog_horarios_homepage',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // caog_horarios_user_register
            if ($pathinfo === '/user/register') {
                return array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::registrarAction',  '_route' => 'caog_horarios_user_register',);
            }

            // caog_horarios_user_list
            if ($pathinfo === '/user/list') {
                return array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::listAction',  '_route' => 'caog_horarios_user_list',);
            }

            // caog_horarios_usuario_actividad_register
            if ($pathinfo === '/user/actividad/register') {
                return array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadUsuarioController::registrarAction',  '_route' => 'caog_horarios_usuario_actividad_register',);
            }

        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // caog_horarios_empresa_register
            if ($pathinfo === '/empresa/register') {
                return array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\EmpresaController::registrarAction',  '_route' => 'caog_horarios_empresa_register',);
            }

            // caog_horarios_empresa_list
            if ($pathinfo === '/empresa/list') {
                return array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\EmpresaController::listAction',  '_route' => 'caog_horarios_empresa_list',);
            }

            // caog_horarios_empresa_actividad_register
            if (0 === strpos($pathinfo, '/empresa/actividad/register') && preg_match('#^/empresa/actividad/register/(?P<idEmpresa>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caog_horarios_empresa_actividad_register')), array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadEmpresaController::registrarAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

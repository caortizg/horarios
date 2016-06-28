<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // caog_horarios_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'caog_horarios_homepage');
            }

            return array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'caog_horarios_homepage',);
        }

        if (0 === strpos($pathinfo, '/us')) {
            if (0 === strpos($pathinfo, '/user')) {
                // caog_horarios_user_register
                if ($pathinfo === '/user/register') {
                    return array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::registrarAction',  '_route' => 'caog_horarios_user_register',);
                }

                // caog_horarios_user_list
                if ($pathinfo === '/user/list') {
                    return array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::listAction',  '_route' => 'caog_horarios_user_list',);
                }

                // caog_horarios_user_timetable
                if (0 === strpos($pathinfo, '/user/timetable') && preg_match('#^/user/timetable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'caog_horarios_user_timetable')), array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::timetableAction',  'id' => 0,));
                }

                if (0 === strpos($pathinfo, '/user/actividad')) {
                    // caog_horarios_usuario_actividad_register
                    if (0 === strpos($pathinfo, '/user/actividad/register') && preg_match('#^/user/actividad/register(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'caog_horarios_usuario_actividad_register')), array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadUsuarioController::registrarAction',  'id' => 0,));
                    }

                    // caog_horarios_usuario_actividad_list
                    if (0 === strpos($pathinfo, '/user/actividad/list') && preg_match('#^/user/actividad/list(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'caog_horarios_usuario_actividad_list')), array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadUsuarioController::listAction',  'id' => 0,));
                    }

                }

            }

            // caog_horarios_usuario_actividad_vincular
            if (0 === strpos($pathinfo, '/usuario/actividad/vincular') && preg_match('#^/usuario/actividad/vincular(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caog_horarios_usuario_actividad_vincular')), array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadUsuarioController::vincularAction',  'id' => 0,));
            }

            // caog_horarios_usuario_franjas_publicas_crear
            if (0 === strpos($pathinfo, '/user/franjas/publicas/crear') && preg_match('#^/user/franjas/publicas/crear(?:/(?P<idUser>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caog_horarios_usuario_franjas_publicas_crear')), array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadFranjaController::createAction',  'idUser' => 0,));
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

            if (0 === strpos($pathinfo, '/empresa/actividad')) {
                // caog_horarios_empresa_actividad_register
                if (0 === strpos($pathinfo, '/empresa/actividad/register') && preg_match('#^/empresa/actividad/register/(?P<idEmpresa>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'caog_horarios_empresa_actividad_register')), array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadEmpresaController::registrarAction',));
                }

                // caog_horarios_empresa_actividad_list
                if (0 === strpos($pathinfo, '/empresa/actividad/list') && preg_match('#^/empresa/actividad/list(?:/(?P<idEmpresa>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'caog_horarios_empresa_actividad_list')), array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadEmpresaController::listAction',  'idEmpresa' => 0,));
                }

                // caog_horarios_empresa_actividad_vincular
                if (0 === strpos($pathinfo, '/empresa/actividad/vincular') && preg_match('#^/empresa/actividad/vincular(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'caog_horarios_empresa_actividad_vincular')), array (  '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadFranjaController::vincularAction',  'id' => 0,));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

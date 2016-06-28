<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_user_timetable' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::timetableAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/timetable',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_usuario_actividad_register' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadUsuarioController::registrarAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/actividad/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_usuario_actividad_list' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadUsuarioController::listAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/actividad/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_usuario_actividad_vincular' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadUsuarioController::vincularAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/usuario/actividad/vincular',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_usuario_franjas_publicas_crear' => array (  0 =>   array (    0 => 'idUser',  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadFranjaController::createAction',    'idUser' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUser',    ),    1 =>     array (      0 => 'text',      1 => '/user/franjas/publicas/crear',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\EmpresaController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresa/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\EmpresaController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresa/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_actividad_register' => array (  0 =>   array (    0 => 'idEmpresa',  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadEmpresaController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEmpresa',    ),    1 =>     array (      0 => 'text',      1 => '/empresa/actividad/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_actividad_getActividadEmpresaAjax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadEmpresaController::getActividadEmpresaAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresa/actividad/getActividadEmpresaAjax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_actividad_getActividadEmpresa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadEmpresaController::getActividadEmpresaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresa/actividad/getActividadEmpresa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_actividad_list' => array (  0 =>   array (    0 => 'idEmpresa',  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadEmpresaController::listAction',    'idEmpresa' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEmpresa',    ),    1 =>     array (      0 => 'text',      1 => '/empresa/actividad/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_actividad_vincular' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadFranjaController::vincularAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/empresa/actividad/vincular',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

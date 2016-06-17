<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'caog_horarios_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\UsuarioController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_usuario_actividad_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadUsuarioController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/actividad/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\EmpresaController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresa/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\EmpresaController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresa/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caog_horarios_empresa_actividad_register' => array (  0 =>   array (    0 => 'idEmpresa',  ),  1 =>   array (    '_controller' => 'Caog\\HorariosBundle\\Controller\\ActividadEmpresaController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEmpresa',    ),    1 =>     array (      0 => 'text',      1 => '/empresa/actividad/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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

<?php

/* @CaogHorarios/general/header.html.twig */
class __TwigTemplate_d803d11740199545b237f0956aadac7ae7baf583cafc005d35327756e1d0b7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73c76a7e4c146fb8018a737e46a3bad2b57be582f183ebc9e1eceaf68d0d76ce = $this->env->getExtension("native_profiler");
        $__internal_73c76a7e4c146fb8018a737e46a3bad2b57be582f183ebc9e1eceaf68d0d76ce->enter($__internal_73c76a7e4c146fb8018a737e46a3bad2b57be582f183ebc9e1eceaf68d0d76ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/general/header.html.twig"));

        // line 1
        echo "<header>
    <nav class=\"navbar navbar-inverse navbar-static-top\">
        <div class=\"container\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("caog_horarios_homepage");
        echo "\">
                        HORARIOS
                    </a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("caog_horarios_homepage");
        echo "\">Inicio</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Empresa <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("caog_horarios_empresa_list");
        echo "\">Listado</a></li>
                                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("caog_horarios_empresa_register");
        echo "\">Registrar</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Usuario <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("caog_horarios_user_list");
        echo "\">Listado</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("caog_horarios_user_register");
        echo "\">Registrar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>";
        
        $__internal_73c76a7e4c146fb8018a737e46a3bad2b57be582f183ebc9e1eceaf68d0d76ce->leave($__internal_73c76a7e4c146fb8018a737e46a3bad2b57be582f183ebc9e1eceaf68d0d76ce_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/general/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  58 => 23,  49 => 17,  45 => 16,  38 => 12,  29 => 6,  22 => 1,);
    }
}
/* <header>*/
/*     <nav class="navbar navbar-inverse navbar-static-top">*/
/*         <div class="container">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <a class="navbar-brand" href="{{path('caog_horarios_homepage')}}">*/
/*                         HORARIOS*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li><a href="{{path('caog_horarios_homepage')}}">Inicio</a></li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresa <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{path('caog_horarios_empresa_list')}}">Listado</a></li>*/
/*                                 <li><a href="{{path('caog_horarios_empresa_register')}}">Registrar</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{path('caog_horarios_user_list')}}">Listado</a></li>*/
/*                                 <li><a href="{{path('caog_horarios_user_register')}}">Registrar</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </nav>*/
/* </header>*/

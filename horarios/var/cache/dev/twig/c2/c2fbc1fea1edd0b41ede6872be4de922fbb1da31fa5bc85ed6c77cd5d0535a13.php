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
        $__internal_7c1796a0a7f8c912c5363ae4ad0dbbb2230497a9871b27e4b89f016671f9de3a = $this->env->getExtension("native_profiler");
        $__internal_7c1796a0a7f8c912c5363ae4ad0dbbb2230497a9871b27e4b89f016671f9de3a->enter($__internal_7c1796a0a7f8c912c5363ae4ad0dbbb2230497a9871b27e4b89f016671f9de3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/general/header.html.twig"));

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
                                <li><a href=\"#\">Vincular informacion</a></li>
                                <li><a href=\"#\">Crear horario por empresa</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Usuario <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("caog_horarios_user_list");
        echo "\">Listado</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("caog_horarios_user_register");
        echo "\">Registrar</a></li>
                                <li><a href=\"#\">Vincular informacion</a></li>
                                <li><a href=\"#\">Crear horario por usuario</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>";
        
        $__internal_7c1796a0a7f8c912c5363ae4ad0dbbb2230497a9871b27e4b89f016671f9de3a->leave($__internal_7c1796a0a7f8c912c5363ae4ad0dbbb2230497a9871b27e4b89f016671f9de3a_prof);

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
        return array (  64 => 26,  60 => 25,  49 => 17,  45 => 16,  38 => 12,  29 => 6,  22 => 1,);
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
/*                                 <li><a href="#">Vincular informacion</a></li>*/
/*                                 <li><a href="#">Crear horario por empresa</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{path('caog_horarios_user_list')}}">Listado</a></li>*/
/*                                 <li><a href="{{path('caog_horarios_user_register')}}">Registrar</a></li>*/
/*                                 <li><a href="#">Vincular informacion</a></li>*/
/*                                 <li><a href="#">Crear horario por usuario</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </nav>*/
/* </header>*/

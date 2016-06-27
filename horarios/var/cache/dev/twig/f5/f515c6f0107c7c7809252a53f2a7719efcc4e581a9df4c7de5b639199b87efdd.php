<?php

/* @CaogHorarios/User/Actividad/registered.html.twig */
class __TwigTemplate_3579b35a10611273fd60884dda0bd02f7d946c4b19af117443fb5d0d87d968a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "@CaogHorarios/User/Actividad/registered.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4c321ffd372e41ea99919f6db5162840e2fee875c93fb3fc94581151b6202bd = $this->env->getExtension("native_profiler");
        $__internal_f4c321ffd372e41ea99919f6db5162840e2fee875c93fb3fc94581151b6202bd->enter($__internal_f4c321ffd372e41ea99919f6db5162840e2fee875c93fb3fc94581151b6202bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/User/Actividad/registered.html.twig"));

        // line 1
        $context["titleBody"] = "Resumen del registro";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c321ffd372e41ea99919f6db5162840e2fee875c93fb3fc94581151b6202bd->leave($__internal_f4c321ffd372e41ea99919f6db5162840e2fee875c93fb3fc94581151b6202bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a76a286d5d4fe39534d3e27dda7da3ad523900dae6c17b01325024cfec1c0f2 = $this->env->getExtension("native_profiler");
        $__internal_0a76a286d5d4fe39534d3e27dda7da3ad523900dae6c17b01325024cfec1c0f2->enter($__internal_0a76a286d5d4fe39534d3e27dda7da3ad523900dae6c17b01325024cfec1c0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">Datos de la actividad</div>
        <div class=\"panel-body\">
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Nombre</b></div>
                <div class=\"col-md-9\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "getNombre", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Usuario</b></div>
                <div class=\"col-md-9\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos", array()), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>tipo</b></div>
                <div class=\"col-md-9\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "getTipo", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Prioridad</b></div>
                <div class=\"col-md-9\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "getPrioridad", array(), "method"), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">Datos de localizacion</div>
        <div class=\"panel-body\">
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Pais</b></div>
                <div class=\"col-md-9\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "getPais", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Departamento</b></div>
                <div class=\"col-md-9\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "getDepartamento", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Ciudad</b></div>
                <div class=\"col-md-9\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "getCiudad", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Localidad</b></div>
                <div class=\"col-md-9\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "getLocalidad", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Dirección</b></div>
                <div class=\"col-md-9\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "getDireccion", array(), "method"), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_0a76a286d5d4fe39534d3e27dda7da3ad523900dae6c17b01325024cfec1c0f2->leave($__internal_0a76a286d5d4fe39534d3e27dda7da3ad523900dae6c17b01325024cfec1c0f2_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/User/Actividad/registered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  106 => 42,  99 => 38,  92 => 34,  85 => 30,  73 => 21,  66 => 17,  57 => 13,  50 => 9,  43 => 4,  37 => 3,  30 => 2,  28 => 1,  11 => 2,);
    }
}
/* {% set titleBody = 'Resumen del registro' %}*/
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% block body %}*/
/*     <div class="panel panel-success">*/
/*         <div class="panel-heading">Datos de la actividad</div>*/
/*         <div class="panel-body">*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Nombre</b></div>*/
/*                 <div class="col-md-9">{{actividad.getNombre()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Usuario</b></div>*/
/*                 <div class="col-md-9">{{usuario.nombre}} {{usuario.apellidos}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>tipo</b></div>*/
/*                 <div class="col-md-9">{{actividad.getTipo()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Prioridad</b></div>*/
/*                 <div class="col-md-9">{{actividad.getPrioridad()}}</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-success">*/
/*         <div class="panel-heading">Datos de localizacion</div>*/
/*         <div class="panel-body">*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Pais</b></div>*/
/*                 <div class="col-md-9">{{actividad.getPais()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Departamento</b></div>*/
/*                 <div class="col-md-9">{{actividad.getDepartamento()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Ciudad</b></div>*/
/*                 <div class="col-md-9">{{actividad.getCiudad()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Localidad</b></div>*/
/*                 <div class="col-md-9">{{actividad.getLocalidad()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Dirección</b></div>*/
/*                 <div class="col-md-9">{{actividad.getDireccion()}}</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

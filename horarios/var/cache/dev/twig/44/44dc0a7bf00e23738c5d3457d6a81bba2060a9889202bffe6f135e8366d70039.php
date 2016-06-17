<?php

/* @CaogHorarios/Empresa/Actividad/registered.html.twig */
class __TwigTemplate_920c5eeeac0c10ebde3e2bbfc8917abe9046b19ffed3a73b47c22c678b8ddc08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "@CaogHorarios/Empresa/Actividad/registered.html.twig", 2);
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
        $__internal_945037b9aaddd85688ee630e58d44d399ae83d88d7af3f27b1e3c02d3aa6b846 = $this->env->getExtension("native_profiler");
        $__internal_945037b9aaddd85688ee630e58d44d399ae83d88d7af3f27b1e3c02d3aa6b846->enter($__internal_945037b9aaddd85688ee630e58d44d399ae83d88d7af3f27b1e3c02d3aa6b846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/Empresa/Actividad/registered.html.twig"));

        // line 1
        $context["titleBody"] = "Resumen del registro";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_945037b9aaddd85688ee630e58d44d399ae83d88d7af3f27b1e3c02d3aa6b846->leave($__internal_945037b9aaddd85688ee630e58d44d399ae83d88d7af3f27b1e3c02d3aa6b846_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3ab918fb871024ac1ba2294ec56221f1360b5448d86c6255d2ed6ab7bfc23c6 = $this->env->getExtension("native_profiler");
        $__internal_f3ab918fb871024ac1ba2294ec56221f1360b5448d86c6255d2ed6ab7bfc23c6->enter($__internal_f3ab918fb871024ac1ba2294ec56221f1360b5448d86c6255d2ed6ab7bfc23c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"col-md-3\"><b>Empresa</b></div>
                <div class=\"col-md-9\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "getNombre", array(), "method"), "html", null, true);
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
        
        $__internal_f3ab918fb871024ac1ba2294ec56221f1360b5448d86c6255d2ed6ab7bfc23c6->leave($__internal_f3ab918fb871024ac1ba2294ec56221f1360b5448d86c6255d2ed6ab7bfc23c6_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/Empresa/Actividad/registered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  71 => 21,  64 => 17,  57 => 13,  50 => 9,  43 => 4,  37 => 3,  30 => 2,  28 => 1,  11 => 2,);
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
/*                 <div class="col-md-3"><b>Empresa</b></div>*/
/*                 <div class="col-md-9">{{empresa.getNombre()}}</div>*/
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

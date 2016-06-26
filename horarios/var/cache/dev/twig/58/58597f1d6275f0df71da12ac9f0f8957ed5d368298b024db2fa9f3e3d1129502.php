<?php

/* @CaogHorarios/Empresa/registered.html.twig */
class __TwigTemplate_74e30a79447eb8942a6d04b400815f9bebef543121797f96645da0003c090efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "@CaogHorarios/Empresa/registered.html.twig", 2);
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
        $__internal_c7d030d1684f527e5a28fa7953963cadad3c0d74df806f50b8c34d1d2d129b3f = $this->env->getExtension("native_profiler");
        $__internal_c7d030d1684f527e5a28fa7953963cadad3c0d74df806f50b8c34d1d2d129b3f->enter($__internal_c7d030d1684f527e5a28fa7953963cadad3c0d74df806f50b8c34d1d2d129b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/Empresa/registered.html.twig"));

        // line 1
        $context["titleBody"] = "Resumen del registro";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7d030d1684f527e5a28fa7953963cadad3c0d74df806f50b8c34d1d2d129b3f->leave($__internal_c7d030d1684f527e5a28fa7953963cadad3c0d74df806f50b8c34d1d2d129b3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b756392a319ef65454e981211eee71f48ea38eee50da87ddeb5133736a9f984b = $this->env->getExtension("native_profiler");
        $__internal_b756392a319ef65454e981211eee71f48ea38eee50da87ddeb5133736a9f984b->enter($__internal_b756392a319ef65454e981211eee71f48ea38eee50da87ddeb5133736a9f984b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">Datos empresariales</div>
        <div class=\"panel-body\">
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Nombre</b></div>
                <div class=\"col-md-9\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "getNombre", array(), "method"), "html", null, true);
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
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "getPais", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Departamento</b></div>
                <div class=\"col-md-9\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "getDepartamento", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Ciudad</b></div>
                <div class=\"col-md-9\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "getCiudad", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Localidad</b></div>
                <div class=\"col-md-9\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "getLocalidad", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Dirección</b></div>
                <div class=\"col-md-9\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "getDireccion", array(), "method"), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_b756392a319ef65454e981211eee71f48ea38eee50da87ddeb5133736a9f984b->leave($__internal_b756392a319ef65454e981211eee71f48ea38eee50da87ddeb5133736a9f984b_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/Empresa/registered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  50 => 9,  43 => 4,  37 => 3,  30 => 2,  28 => 1,  11 => 2,);
    }
}
/* {% set titleBody = 'Resumen del registro' %}*/
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% block body %}*/
/*     <div class="panel panel-success">*/
/*         <div class="panel-heading">Datos empresariales</div>*/
/*         <div class="panel-body">*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Nombre</b></div>*/
/*                 <div class="col-md-9">{{empresa.getNombre()}}</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-success">*/
/*         <div class="panel-heading">Datos de localizacion</div>*/
/*         <div class="panel-body">*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Pais</b></div>*/
/*                 <div class="col-md-9">{{empresa.getPais()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Departamento</b></div>*/
/*                 <div class="col-md-9">{{empresa.getDepartamento()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Ciudad</b></div>*/
/*                 <div class="col-md-9">{{empresa.getCiudad()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Localidad</b></div>*/
/*                 <div class="col-md-9">{{empresa.getLocalidad()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Dirección</b></div>*/
/*                 <div class="col-md-9">{{empresa.getDireccion()}}</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

<?php

/* CaogHorariosBundle:User:registered.html.twig */
class __TwigTemplate_ca91fc1120594373f403920a90c9bdf40628e48ac1e805767d5da93fefd6ca6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "CaogHorariosBundle:User:registered.html.twig", 2);
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
        $__internal_46d3a19fd2fafebcaba7f70bc773a26f5804ddca51888160f8e25d7885c2b5e5 = $this->env->getExtension("native_profiler");
        $__internal_46d3a19fd2fafebcaba7f70bc773a26f5804ddca51888160f8e25d7885c2b5e5->enter($__internal_46d3a19fd2fafebcaba7f70bc773a26f5804ddca51888160f8e25d7885c2b5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:registered.html.twig"));

        // line 1
        $context["titleBody"] = "Resumen del registro";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d3a19fd2fafebcaba7f70bc773a26f5804ddca51888160f8e25d7885c2b5e5->leave($__internal_46d3a19fd2fafebcaba7f70bc773a26f5804ddca51888160f8e25d7885c2b5e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9887f549878d8735e7ebd3e7868b6aac1fd3106187bc797e45379f71bb66f924 = $this->env->getExtension("native_profiler");
        $__internal_9887f549878d8735e7ebd3e7868b6aac1fd3106187bc797e45379f71bb66f924->enter($__internal_9887f549878d8735e7ebd3e7868b6aac1fd3106187bc797e45379f71bb66f924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">Datos personales</div>
        <div class=\"panel-body\">
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Nombre</b></div>
                <div class=\"col-md-9\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getNombre", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Apellidos</b></div>
                <div class=\"col-md-9\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getApellidos", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Edad</b></div>
                <div class=\"col-md-9\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getEdad", array(), "method"), "html", null, true);
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
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getPais", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Departamento</b></div>
                <div class=\"col-md-9\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getDepartamento", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Ciudad</b></div>
                <div class=\"col-md-9\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getCiudad", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Localidad</b></div>
                <div class=\"col-md-9\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getLocalidad", array(), "method"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"col-md-3\"><b>Dirección</b></div>
                <div class=\"col-md-9\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getDireccion", array(), "method"), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_9887f549878d8735e7ebd3e7868b6aac1fd3106187bc797e45379f71bb66f924->leave($__internal_9887f549878d8735e7ebd3e7868b6aac1fd3106187bc797e45379f71bb66f924_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:User:registered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  64 => 17,  57 => 13,  50 => 9,  43 => 4,  37 => 3,  30 => 2,  28 => 1,  11 => 2,);
    }
}
/* {% set titleBody = 'Resumen del registro' %}*/
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% block body %}*/
/*     <div class="panel panel-success">*/
/*         <div class="panel-heading">Datos personales</div>*/
/*         <div class="panel-body">*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Nombre</b></div>*/
/*                 <div class="col-md-9">{{usuario.getNombre()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Apellidos</b></div>*/
/*                 <div class="col-md-9">{{usuario.getApellidos()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Edad</b></div>*/
/*                 <div class="col-md-9">{{usuario.getEdad()}}</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-success">*/
/*         <div class="panel-heading">Datos de localizacion</div>*/
/*         <div class="panel-body">*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Pais</b></div>*/
/*                 <div class="col-md-9">{{usuario.getPais()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Departamento</b></div>*/
/*                 <div class="col-md-9">{{usuario.getDepartamento()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Ciudad</b></div>*/
/*                 <div class="col-md-9">{{usuario.getCiudad()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Localidad</b></div>*/
/*                 <div class="col-md-9">{{usuario.getLocalidad()}}</div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="col-md-3"><b>Dirección</b></div>*/
/*                 <div class="col-md-9">{{usuario.getDireccion()}}</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

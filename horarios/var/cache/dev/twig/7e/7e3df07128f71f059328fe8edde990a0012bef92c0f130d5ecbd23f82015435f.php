<?php

/* @CaogHorarios/Empresa/list.html.twig */
class __TwigTemplate_aec2d5da9dd5bc376d2b44da8b618b0f5a93be36187f8c59db962dcd4c7f9d2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "@CaogHorarios/Empresa/list.html.twig", 3);
        $this->blocks = array(
            'theadList' => array($this, 'block_theadList'),
            'tbodyList' => array($this, 'block_tbodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaogHorariosBundle::/general/listBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f467980a4ada7bd40e34d998d8a832d3ab919efec7f2ab04e7910b4a0cf9f0eb = $this->env->getExtension("native_profiler");
        $__internal_f467980a4ada7bd40e34d998d8a832d3ab919efec7f2ab04e7910b4a0cf9f0eb->enter($__internal_f467980a4ada7bd40e34d998d8a832d3ab919efec7f2ab04e7910b4a0cf9f0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/Empresa/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Empresas";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f467980a4ada7bd40e34d998d8a832d3ab919efec7f2ab04e7910b4a0cf9f0eb->leave($__internal_f467980a4ada7bd40e34d998d8a832d3ab919efec7f2ab04e7910b4a0cf9f0eb_prof);

    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_9ae38bac2dbfbf2e2c69b55baf99b9257d5aa617071960d547520c736f9f4184 = $this->env->getExtension("native_profiler");
        $__internal_9ae38bac2dbfbf2e2c69b55baf99b9257d5aa617071960d547520c736f9f4184->enter($__internal_9ae38bac2dbfbf2e2c69b55baf99b9257d5aa617071960d547520c736f9f4184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 5
        echo "    <th>Name</th>
    <th>Pais</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Localidad</th>
    <th>Direccion</th>
    <th>Opciones</th>
";
        
        $__internal_9ae38bac2dbfbf2e2c69b55baf99b9257d5aa617071960d547520c736f9f4184->leave($__internal_9ae38bac2dbfbf2e2c69b55baf99b9257d5aa617071960d547520c736f9f4184_prof);

    }

    // line 13
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_ad7e6a4531bcdaa736cbd6027ba6e56276049234cb49c551eee111e11da81c2f = $this->env->getExtension("native_profiler");
        $__internal_ad7e6a4531bcdaa736cbd6027ba6e56276049234cb49c551eee111e11da81c2f->enter($__internal_ad7e6a4531bcdaa736cbd6027ba6e56276049234cb49c551eee111e11da81c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 15
            echo "        <tr>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "pais", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "Departamento", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "Ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "Localidad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "Direccion", array()), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-success\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caog_horarios_empresa_actividad_register", array("idEmpresa" => $this->getAttribute($context["empresa"], "getId", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Actividad</a>
                <a class=\"btn btn-info\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caog_horarios_empresa_actividad_list", array("idEmpresa" => $this->getAttribute($context["empresa"], "getId", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-search\"></i> Actividades</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ad7e6a4531bcdaa736cbd6027ba6e56276049234cb49c551eee111e11da81c2f->leave($__internal_ad7e6a4531bcdaa736cbd6027ba6e56276049234cb49c551eee111e11da81c2f_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/Empresa/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  99 => 23,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  71 => 15,  66 => 14,  60 => 13,  46 => 5,  40 => 4,  33 => 3,  31 => 2,  29 => 1,  11 => 3,);
    }
}
/* {% set idList = 'listCompanies' %}*/
/* {% set titleBody = 'Empresas' %}*/
/* {% extends 'CaogHorariosBundle::/general/listBase.html.twig' %}*/
/* {% block theadList %}*/
/*     <th>Name</th>*/
/*     <th>Pais</th>*/
/*     <th>Departamento</th>*/
/*     <th>Ciudad</th>*/
/*     <th>Localidad</th>*/
/*     <th>Direccion</th>*/
/*     <th>Opciones</th>*/
/* {% endblock %}*/
/* {% block tbodyList %}*/
/*     {% for empresa in empresas  %}*/
/*         <tr>*/
/*             <td>{{empresa.nombre}}</td>*/
/*             <td>{{empresa.pais}}</td>*/
/*             <td>{{empresa.Departamento}}</td>*/
/*             <td>{{empresa.Ciudad}}</td>*/
/*             <td>{{empresa.Localidad}}</td>*/
/*             <td>{{empresa.Direccion}}</td>*/
/*             <td>*/
/*                 <a class="btn btn-success" href="{{path('caog_horarios_empresa_actividad_register', {'idEmpresa': empresa.getId})}}"><i class="glyphicon glyphicon-plus"></i> Actividad</a>*/
/*                 <a class="btn btn-info" href="{{path('caog_horarios_empresa_actividad_list', {'idEmpresa': empresa.getId})}}"><i class="glyphicon glyphicon-search"></i> Actividades</a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

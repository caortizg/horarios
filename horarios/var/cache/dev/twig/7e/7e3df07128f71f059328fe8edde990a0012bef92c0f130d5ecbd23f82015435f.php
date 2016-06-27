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
        $__internal_dbab4937cdfbaade14a00522d5846f10769c8993c3079011aebf6b460eb87ea9 = $this->env->getExtension("native_profiler");
        $__internal_dbab4937cdfbaade14a00522d5846f10769c8993c3079011aebf6b460eb87ea9->enter($__internal_dbab4937cdfbaade14a00522d5846f10769c8993c3079011aebf6b460eb87ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/Empresa/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Empresas";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbab4937cdfbaade14a00522d5846f10769c8993c3079011aebf6b460eb87ea9->leave($__internal_dbab4937cdfbaade14a00522d5846f10769c8993c3079011aebf6b460eb87ea9_prof);

    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_29f503012de952b43c06020d30a3ac17d80cfdc3aac305a4d20e92fb9438648f = $this->env->getExtension("native_profiler");
        $__internal_29f503012de952b43c06020d30a3ac17d80cfdc3aac305a4d20e92fb9438648f->enter($__internal_29f503012de952b43c06020d30a3ac17d80cfdc3aac305a4d20e92fb9438648f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 5
        echo "    <th>Name</th>
    <th>Pais</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Localidad</th>
    <th>Direccion</th>
    <th>Opciones</th>
";
        
        $__internal_29f503012de952b43c06020d30a3ac17d80cfdc3aac305a4d20e92fb9438648f->leave($__internal_29f503012de952b43c06020d30a3ac17d80cfdc3aac305a4d20e92fb9438648f_prof);

    }

    // line 13
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_ae47be4c13f84c566eb2625ae26e2ed70488a57444b6e7b463ee94ea70f2d12d = $this->env->getExtension("native_profiler");
        $__internal_ae47be4c13f84c566eb2625ae26e2ed70488a57444b6e7b463ee94ea70f2d12d->enter($__internal_ae47be4c13f84c566eb2625ae26e2ed70488a57444b6e7b463ee94ea70f2d12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

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
        
        $__internal_ae47be4c13f84c566eb2625ae26e2ed70488a57444b6e7b463ee94ea70f2d12d->leave($__internal_ae47be4c13f84c566eb2625ae26e2ed70488a57444b6e7b463ee94ea70f2d12d_prof);

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

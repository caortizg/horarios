<?php

/* @CaogHorarios/Empresa/list.html.twig */
class __TwigTemplate_21186d48e6e4f4d5447256e7b0bc6aea41b372d3e6d58abb04f106feffd57542 extends Twig_Template
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
        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Empresas";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        // line 5
        echo "    <th>Name</th>
    <th>Pais</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Localidad</th>
    <th>Direccion</th>
    <th>Opciones</th>
";
    }

    // line 13
    public function block_tbodyList($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : null));
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
            <td><a class=\"btn btn-success\" href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("caog_horarios_empresa_actividad_register");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Actividad</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  51 => 14,  48 => 13,  37 => 5,  34 => 4,  30 => 3,  28 => 2,  26 => 1,  11 => 3,);
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
/*             <td><a class="btn btn-success" href="{{path('caog_horarios_empresa_actividad_register')}}/{{empresa.id}}"><i class="glyphicon glyphicon-plus"></i> Actividad</a></td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

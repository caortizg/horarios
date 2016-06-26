<?php

/* @CaogHorarios/User/list.html.twig */
class __TwigTemplate_9c8d202781e996a6d6945b04d04e3b8b21a179f2e2a20fd183f6268be4ccc93c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "@CaogHorarios/User/list.html.twig", 3);
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
        $__internal_d5177028623ebdc72d8310151cacafcc95705b6f634076b166b2df40bf630c2e = $this->env->getExtension("native_profiler");
        $__internal_d5177028623ebdc72d8310151cacafcc95705b6f634076b166b2df40bf630c2e->enter($__internal_d5177028623ebdc72d8310151cacafcc95705b6f634076b166b2df40bf630c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/User/list.html.twig"));

        // line 1
        $context["idList"] = "listUsers";
        // line 2
        $context["titleBody"] = "Usuarios";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5177028623ebdc72d8310151cacafcc95705b6f634076b166b2df40bf630c2e->leave($__internal_d5177028623ebdc72d8310151cacafcc95705b6f634076b166b2df40bf630c2e_prof);

    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_d9d7423a5ff036bf9f942f553ae9195d3c7166f62f3b07d101bc9c5108927892 = $this->env->getExtension("native_profiler");
        $__internal_d9d7423a5ff036bf9f942f553ae9195d3c7166f62f3b07d101bc9c5108927892->enter($__internal_d9d7423a5ff036bf9f942f553ae9195d3c7166f62f3b07d101bc9c5108927892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 5
        echo "    <th>Name</th>
    <th>Apellidos</th>
    <th>Edad</th>
    <th>Pais</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Localidad</th>
    <th>Direccion</th>
    <th>Opciones</th>
";
        
        $__internal_d9d7423a5ff036bf9f942f553ae9195d3c7166f62f3b07d101bc9c5108927892->leave($__internal_d9d7423a5ff036bf9f942f553ae9195d3c7166f62f3b07d101bc9c5108927892_prof);

    }

    // line 15
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_6a0afe72ba34910a5143c291522e4d1011daa9fbe7699f20e88b24f7d5d22dcc = $this->env->getExtension("native_profiler");
        $__internal_6a0afe72ba34910a5143c291522e4d1011daa9fbe7699f20e88b24f7d5d22dcc->enter($__internal_6a0afe72ba34910a5143c291522e4d1011daa9fbe7699f20e88b24f7d5d22dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellidos", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "edad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "pais", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "Departamento", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "Ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "Localidad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "Direccion", array()), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-success\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caog_horarios_usuario_actividad_register", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\" title=\"Adicionar actividad\"><i class=\"glyphicon glyphicon-plus\"></i> <i class=\"glyphicon glyphicon-blackboard\"></i></a>
                <a class=\"btn btn-info\" href=\"#\" title=\"Consultar actividades\"><i class=\"glyphicon glyphicon-search\"></i> <i class=\"glyphicon glyphicon-blackboard\"></i></a>
                <a class=\"btn btn-success\" href=\"#\" title=\"Vincular entidad\"><i class=\"glyphicon glyphicon-link\"></i> <i class=\"glyphicon glyphicon-tent\"></i></a>
                <a class=\"btn btn-info\" href=\"#\" title=\"Consultar entidades\"><i class=\"glyphicon glyphicon-search\"></i> <i class=\"glyphicon glyphicon-tent\"></i></a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6a0afe72ba34910a5143c291522e4d1011daa9fbe7699f20e88b24f7d5d22dcc->leave($__internal_6a0afe72ba34910a5143c291522e4d1011daa9fbe7699f20e88b24f7d5d22dcc_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/User/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  73 => 17,  68 => 16,  62 => 15,  46 => 5,  40 => 4,  33 => 3,  31 => 2,  29 => 1,  11 => 3,);
    }
}
/* {% set idList = 'listUsers' %}*/
/* {% set titleBody = 'Usuarios' %}*/
/* {% extends 'CaogHorariosBundle::/general/listBase.html.twig' %}*/
/* {% block theadList %}*/
/*     <th>Name</th>*/
/*     <th>Apellidos</th>*/
/*     <th>Edad</th>*/
/*     <th>Pais</th>*/
/*     <th>Departamento</th>*/
/*     <th>Ciudad</th>*/
/*     <th>Localidad</th>*/
/*     <th>Direccion</th>*/
/*     <th>Opciones</th>*/
/* {% endblock %}*/
/* {% block tbodyList %}*/
/*     {% for usuario in usuarios  %}*/
/*         <tr>*/
/*             <td>{{usuario.nombre}}</td>*/
/*             <td>{{usuario.apellidos}}</td>*/
/*             <td>{{usuario.edad}}</td>*/
/*             <td>{{usuario.pais}}</td>*/
/*             <td>{{usuario.Departamento}}</td>*/
/*             <td>{{usuario.Ciudad}}</td>*/
/*             <td>{{usuario.Localidad}}</td>*/
/*             <td>{{usuario.Direccion}}</td>*/
/*             <td>*/
/*                 <a class="btn btn-success" href="{{path('caog_horarios_usuario_actividad_register', {'id': usuario.id})}}" title="Adicionar actividad"><i class="glyphicon glyphicon-plus"></i> <i class="glyphicon glyphicon-blackboard"></i></a>*/
/*                 <a class="btn btn-info" href="#" title="Consultar actividades"><i class="glyphicon glyphicon-search"></i> <i class="glyphicon glyphicon-blackboard"></i></a>*/
/*                 <a class="btn btn-success" href="#" title="Vincular entidad"><i class="glyphicon glyphicon-link"></i> <i class="glyphicon glyphicon-tent"></i></a>*/
/*                 <a class="btn btn-info" href="#" title="Consultar entidades"><i class="glyphicon glyphicon-search"></i> <i class="glyphicon glyphicon-tent"></i></a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

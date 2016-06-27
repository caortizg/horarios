<?php

/* CaogHorariosBundle:User:list.html.twig */
class __TwigTemplate_7017019508ed5abcd89598e407522a9f88e65f904bb88979fbc5b89e57c6c249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "CaogHorariosBundle:User:list.html.twig", 3);
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
        $__internal_121a5611634c481aefd3c5d83a6a7caaa4706cec65b92bd2674d4aa2c0d9bd78 = $this->env->getExtension("native_profiler");
        $__internal_121a5611634c481aefd3c5d83a6a7caaa4706cec65b92bd2674d4aa2c0d9bd78->enter($__internal_121a5611634c481aefd3c5d83a6a7caaa4706cec65b92bd2674d4aa2c0d9bd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:list.html.twig"));

        // line 1
        $context["idList"] = "listUsers";
        // line 2
        $context["titleBody"] = "Usuarios";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121a5611634c481aefd3c5d83a6a7caaa4706cec65b92bd2674d4aa2c0d9bd78->leave($__internal_121a5611634c481aefd3c5d83a6a7caaa4706cec65b92bd2674d4aa2c0d9bd78_prof);

    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_91ff6bcf24c998c20e71fc9ac6095c44671ab65e577e5925a0693f6ca2c50b2f = $this->env->getExtension("native_profiler");
        $__internal_91ff6bcf24c998c20e71fc9ac6095c44671ab65e577e5925a0693f6ca2c50b2f->enter($__internal_91ff6bcf24c998c20e71fc9ac6095c44671ab65e577e5925a0693f6ca2c50b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

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
        
        $__internal_91ff6bcf24c998c20e71fc9ac6095c44671ab65e577e5925a0693f6ca2c50b2f->leave($__internal_91ff6bcf24c998c20e71fc9ac6095c44671ab65e577e5925a0693f6ca2c50b2f_prof);

    }

    // line 15
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_cf888b87a48a2da752efa747394f0b85d77a69454ae8e282911de2bac66da1cf = $this->env->getExtension("native_profiler");
        $__internal_cf888b87a48a2da752efa747394f0b85d77a69454ae8e282911de2bac66da1cf->enter($__internal_cf888b87a48a2da752efa747394f0b85d77a69454ae8e282911de2bac66da1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

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
                <a class=\"btn btn-info\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caog_horarios_usuario_actividad_list", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\"  title=\"Consultar actividades\"><i class=\"glyphicon glyphicon-search\"></i> <i class=\"glyphicon glyphicon-blackboard\"></i></a>
                <a class=\"btn btn-success\" href=\"#\" title=\"Vincular entidad\"><i class=\"glyphicon glyphicon-link\"></i> <i class=\"glyphicon glyphicon-tent\"></i></a>
                <a class=\"btn btn-info\" href=\"#\" title=\"Consultar entidades\"><i class=\"glyphicon glyphicon-search\"></i> <i class=\"glyphicon glyphicon-tent\"></i></a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cf888b87a48a2da752efa747394f0b85d77a69454ae8e282911de2bac66da1cf->leave($__internal_cf888b87a48a2da752efa747394f0b85d77a69454ae8e282911de2bac66da1cf_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:User:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  109 => 27,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  73 => 17,  68 => 16,  62 => 15,  46 => 5,  40 => 4,  33 => 3,  31 => 2,  29 => 1,  11 => 3,);
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
/*                 <a class="btn btn-info" href="{{path('caog_horarios_usuario_actividad_list', {'id': usuario.id})}}"  title="Consultar actividades"><i class="glyphicon glyphicon-search"></i> <i class="glyphicon glyphicon-blackboard"></i></a>*/
/*                 <a class="btn btn-success" href="#" title="Vincular entidad"><i class="glyphicon glyphicon-link"></i> <i class="glyphicon glyphicon-tent"></i></a>*/
/*                 <a class="btn btn-info" href="#" title="Consultar entidades"><i class="glyphicon glyphicon-search"></i> <i class="glyphicon glyphicon-tent"></i></a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

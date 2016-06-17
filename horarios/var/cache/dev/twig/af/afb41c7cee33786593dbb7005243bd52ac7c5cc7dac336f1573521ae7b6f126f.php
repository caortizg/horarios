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
        $__internal_a8ed5f066f08e5e18365ea296291f14ee6771dc3e7b402eaaa1c34faf26c71b5 = $this->env->getExtension("native_profiler");
        $__internal_a8ed5f066f08e5e18365ea296291f14ee6771dc3e7b402eaaa1c34faf26c71b5->enter($__internal_a8ed5f066f08e5e18365ea296291f14ee6771dc3e7b402eaaa1c34faf26c71b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:list.html.twig"));

        // line 1
        $context["idList"] = "listUsers";
        // line 2
        $context["titleBody"] = "Usuarios";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8ed5f066f08e5e18365ea296291f14ee6771dc3e7b402eaaa1c34faf26c71b5->leave($__internal_a8ed5f066f08e5e18365ea296291f14ee6771dc3e7b402eaaa1c34faf26c71b5_prof);

    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_38dd60f9b4a1a344d74b4f697ef5857b5c9d4dc93b33485e953d3e93b10d2ff5 = $this->env->getExtension("native_profiler");
        $__internal_38dd60f9b4a1a344d74b4f697ef5857b5c9d4dc93b33485e953d3e93b10d2ff5->enter($__internal_38dd60f9b4a1a344d74b4f697ef5857b5c9d4dc93b33485e953d3e93b10d2ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 5
        echo "    <th>Name</th>
    <th>Apellidos</th>
    <th>Edad</th>
    <th>Pais</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Localidad</th>
    <th>Direccion</th>
";
        
        $__internal_38dd60f9b4a1a344d74b4f697ef5857b5c9d4dc93b33485e953d3e93b10d2ff5->leave($__internal_38dd60f9b4a1a344d74b4f697ef5857b5c9d4dc93b33485e953d3e93b10d2ff5_prof);

    }

    // line 14
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_2c1949bf548c4ef4639b769c815526e187f0d8f345e81e54ae526d41f6f6a450 = $this->env->getExtension("native_profiler");
        $__internal_2c1949bf548c4ef4639b769c815526e187f0d8f345e81e54ae526d41f6f6a450->enter($__internal_2c1949bf548c4ef4639b769c815526e187f0d8f345e81e54ae526d41f6f6a450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 16
            echo "        <tr>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellidos", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "edad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "pais", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "Departamento", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "Ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "Localidad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "Direccion", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2c1949bf548c4ef4639b769c815526e187f0d8f345e81e54ae526d41f6f6a450->leave($__internal_2c1949bf548c4ef4639b769c815526e187f0d8f345e81e54ae526d41f6f6a450_prof);

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
        return array (  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  72 => 16,  67 => 15,  61 => 14,  46 => 5,  40 => 4,  33 => 3,  31 => 2,  29 => 1,  11 => 3,);
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
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

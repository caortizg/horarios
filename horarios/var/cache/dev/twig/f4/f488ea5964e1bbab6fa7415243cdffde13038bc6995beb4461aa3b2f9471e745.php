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
        $__internal_67d67a277f32431506eec80e8aca06e676a32bbe32343a09ca518a94293e0452 = $this->env->getExtension("native_profiler");
        $__internal_67d67a277f32431506eec80e8aca06e676a32bbe32343a09ca518a94293e0452->enter($__internal_67d67a277f32431506eec80e8aca06e676a32bbe32343a09ca518a94293e0452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/User/list.html.twig"));

        // line 1
        $context["idList"] = "listUsers";
        // line 2
        $context["titleBody"] = "Usuarios";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d67a277f32431506eec80e8aca06e676a32bbe32343a09ca518a94293e0452->leave($__internal_67d67a277f32431506eec80e8aca06e676a32bbe32343a09ca518a94293e0452_prof);

    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_b5aad2d32afb0d0a6e77c94548643b58ade38b598199f4a8e0c5c40e0734a6de = $this->env->getExtension("native_profiler");
        $__internal_b5aad2d32afb0d0a6e77c94548643b58ade38b598199f4a8e0c5c40e0734a6de->enter($__internal_b5aad2d32afb0d0a6e77c94548643b58ade38b598199f4a8e0c5c40e0734a6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

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
        
        $__internal_b5aad2d32afb0d0a6e77c94548643b58ade38b598199f4a8e0c5c40e0734a6de->leave($__internal_b5aad2d32afb0d0a6e77c94548643b58ade38b598199f4a8e0c5c40e0734a6de_prof);

    }

    // line 14
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_8afee7f9da2fcb95dddbdc18f33b32a014873f5c3b2cb3cea0707283306da03a = $this->env->getExtension("native_profiler");
        $__internal_8afee7f9da2fcb95dddbdc18f33b32a014873f5c3b2cb3cea0707283306da03a->enter($__internal_8afee7f9da2fcb95dddbdc18f33b32a014873f5c3b2cb3cea0707283306da03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

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
        
        $__internal_8afee7f9da2fcb95dddbdc18f33b32a014873f5c3b2cb3cea0707283306da03a->leave($__internal_8afee7f9da2fcb95dddbdc18f33b32a014873f5c3b2cb3cea0707283306da03a_prof);

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

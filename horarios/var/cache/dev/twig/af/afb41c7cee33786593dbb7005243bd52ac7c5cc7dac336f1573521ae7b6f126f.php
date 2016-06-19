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
        $__internal_87d474fe5a2659541b58388d42098ca20fac9ed3c9c29d6b35e71e0b1c9c567f = $this->env->getExtension("native_profiler");
        $__internal_87d474fe5a2659541b58388d42098ca20fac9ed3c9c29d6b35e71e0b1c9c567f->enter($__internal_87d474fe5a2659541b58388d42098ca20fac9ed3c9c29d6b35e71e0b1c9c567f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:list.html.twig"));

        // line 1
        $context["idList"] = "listUsers";
        // line 2
        $context["titleBody"] = "Usuarios";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87d474fe5a2659541b58388d42098ca20fac9ed3c9c29d6b35e71e0b1c9c567f->leave($__internal_87d474fe5a2659541b58388d42098ca20fac9ed3c9c29d6b35e71e0b1c9c567f_prof);

    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_0f6fe089dd41c7e548563d4d85ef3ad3e04f1d11fafb358f149e182e97700e4a = $this->env->getExtension("native_profiler");
        $__internal_0f6fe089dd41c7e548563d4d85ef3ad3e04f1d11fafb358f149e182e97700e4a->enter($__internal_0f6fe089dd41c7e548563d4d85ef3ad3e04f1d11fafb358f149e182e97700e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

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
        
        $__internal_0f6fe089dd41c7e548563d4d85ef3ad3e04f1d11fafb358f149e182e97700e4a->leave($__internal_0f6fe089dd41c7e548563d4d85ef3ad3e04f1d11fafb358f149e182e97700e4a_prof);

    }

    // line 14
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_dabd73b9b7045545d13915d5c94e3bde1f9cdcaf1874e2d331555e1c8bfd8807 = $this->env->getExtension("native_profiler");
        $__internal_dabd73b9b7045545d13915d5c94e3bde1f9cdcaf1874e2d331555e1c8bfd8807->enter($__internal_dabd73b9b7045545d13915d5c94e3bde1f9cdcaf1874e2d331555e1c8bfd8807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

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
        
        $__internal_dabd73b9b7045545d13915d5c94e3bde1f9cdcaf1874e2d331555e1c8bfd8807->leave($__internal_dabd73b9b7045545d13915d5c94e3bde1f9cdcaf1874e2d331555e1c8bfd8807_prof);

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

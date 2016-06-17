<?php

/* CaogHorariosBundle:Empresa:Actividad/list.html.twig */
class __TwigTemplate_b44c6f6087b34ea4f81c17b195ba7f3509be294d59438cf5a8aec7bd890b4dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "CaogHorariosBundle:Empresa:Actividad/list.html.twig", 3);
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
        $__internal_7ed8f328de8097b7c90c7b6129d2c3e300e07a5fa73fa1316cb876a26bcb58e1 = $this->env->getExtension("native_profiler");
        $__internal_7ed8f328de8097b7c90c7b6129d2c3e300e07a5fa73fa1316cb876a26bcb58e1->enter($__internal_7ed8f328de8097b7c90c7b6129d2c3e300e07a5fa73fa1316cb876a26bcb58e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:Empresa:Actividad/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Empresas";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed8f328de8097b7c90c7b6129d2c3e300e07a5fa73fa1316cb876a26bcb58e1->leave($__internal_7ed8f328de8097b7c90c7b6129d2c3e300e07a5fa73fa1316cb876a26bcb58e1_prof);

    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_8eae34da2d3b736dee399740b6d94ed66054ff96e96d2b5b333708e84c2126db = $this->env->getExtension("native_profiler");
        $__internal_8eae34da2d3b736dee399740b6d94ed66054ff96e96d2b5b333708e84c2126db->enter($__internal_8eae34da2d3b736dee399740b6d94ed66054ff96e96d2b5b333708e84c2126db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 5
        echo "    <th>Nombre</th>
    <th>Tipo</th>
    <th>Prioridad</th>
    <th>Empresa</th>
    <th>Pais</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Localidad</th>
    <th>Direccion</th>
    <th>Opciones</th>
";
        
        $__internal_8eae34da2d3b736dee399740b6d94ed66054ff96e96d2b5b333708e84c2126db->leave($__internal_8eae34da2d3b736dee399740b6d94ed66054ff96e96d2b5b333708e84c2126db_prof);

    }

    // line 16
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_4cbb244ced891f3e07dd7ffae8df4e4a80ed00f2191802ceeeaa08ee92023b2d = $this->env->getExtension("native_profiler");
        $__internal_4cbb244ced891f3e07dd7ffae8df4e4a80ed00f2191802ceeeaa08ee92023b2d->enter($__internal_4cbb244ced891f3e07dd7ffae8df4e4a80ed00f2191802ceeeaa08ee92023b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 18
            echo "        <tr>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "tipo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "prioridad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actividad"], "empresa", array()), "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "pais", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Departamento", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Localidad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Direccion", array()), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-success\" href=\"#\"><i class=\"glyphicon glyphicon-plus\"></i> Informacion</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4cbb244ced891f3e07dd7ffae8df4e4a80ed00f2191802ceeeaa08ee92023b2d->leave($__internal_4cbb244ced891f3e07dd7ffae8df4e4a80ed00f2191802ceeeaa08ee92023b2d_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:Empresa:Actividad/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  74 => 18,  69 => 17,  63 => 16,  46 => 5,  40 => 4,  33 => 3,  31 => 2,  29 => 1,  11 => 3,);
    }
}
/* {% set idList = 'listCompanies' %}*/
/* {% set titleBody = 'Empresas' %}*/
/* {% extends 'CaogHorariosBundle::/general/listBase.html.twig' %}*/
/* {% block theadList %}*/
/*     <th>Nombre</th>*/
/*     <th>Tipo</th>*/
/*     <th>Prioridad</th>*/
/*     <th>Empresa</th>*/
/*     <th>Pais</th>*/
/*     <th>Departamento</th>*/
/*     <th>Ciudad</th>*/
/*     <th>Localidad</th>*/
/*     <th>Direccion</th>*/
/*     <th>Opciones</th>*/
/* {% endblock %}*/
/* {% block tbodyList %}*/
/*     {% for actividad in actividades  %}*/
/*         <tr>*/
/*             <td>{{actividad.nombre}}</td>*/
/*             <td>{{actividad.tipo}}</td>*/
/*             <td>{{actividad.prioridad}}</td>*/
/*             <td>{{actividad.empresa.nombre}}</td>*/
/*             <td>{{actividad.pais}}</td>*/
/*             <td>{{actividad.Departamento}}</td>*/
/*             <td>{{actividad.Ciudad}}</td>*/
/*             <td>{{actividad.Localidad}}</td>*/
/*             <td>{{actividad.Direccion}}</td>*/
/*             <td>*/
/*                 <a class="btn btn-success" href="#"><i class="glyphicon glyphicon-plus"></i> Informacion</a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

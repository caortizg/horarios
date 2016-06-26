<?php

/* CaogHorariosBundle:User:Actividad/list.html.twig */
class __TwigTemplate_58cd55c16124626224b629d97bbc0e4566d641b0966a7ec5db05530a565ae304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "CaogHorariosBundle:User:Actividad/list.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        $__internal_587fdeaa8803ece0d2273484e423658099e17577ca31ad89379f1cb521bbcc91 = $this->env->getExtension("native_profiler");
        $__internal_587fdeaa8803ece0d2273484e423658099e17577ca31ad89379f1cb521bbcc91->enter($__internal_587fdeaa8803ece0d2273484e423658099e17577ca31ad89379f1cb521bbcc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:Actividad/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Actividades";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_587fdeaa8803ece0d2273484e423658099e17577ca31ad89379f1cb521bbcc91->leave($__internal_587fdeaa8803ece0d2273484e423658099e17577ca31ad89379f1cb521bbcc91_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fd7f620a520836e9b93b8f2a1524bffead1088cd9d5eb8506c21e9083a44ff4 = $this->env->getExtension("native_profiler");
        $__internal_9fd7f620a520836e9b93b8f2a1524bffead1088cd9d5eb8506c21e9083a44ff4->enter($__internal_9fd7f620a520836e9b93b8f2a1524bffead1088cd9d5eb8506c21e9083a44ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "            <div class=\"alert alert-success\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_9fd7f620a520836e9b93b8f2a1524bffead1088cd9d5eb8506c21e9083a44ff4->leave($__internal_9fd7f620a520836e9b93b8f2a1524bffead1088cd9d5eb8506c21e9083a44ff4_prof);

    }

    // line 15
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_58ca9a30816641bc0cd3f64248375493fb3a386c1ae836c32ac60e99619513bf = $this->env->getExtension("native_profiler");
        $__internal_58ca9a30816641bc0cd3f64248375493fb3a386c1ae836c32ac60e99619513bf->enter($__internal_58ca9a30816641bc0cd3f64248375493fb3a386c1ae836c32ac60e99619513bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 16
        echo "    <th>Nombre</th>
    <th>Tipo</th>
    <th>Prioridad</th>
    <th>Pais</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Localidad</th>
    <th>Direccion</th>
    <th>Opciones</th>
";
        
        $__internal_58ca9a30816641bc0cd3f64248375493fb3a386c1ae836c32ac60e99619513bf->leave($__internal_58ca9a30816641bc0cd3f64248375493fb3a386c1ae836c32ac60e99619513bf_prof);

    }

    // line 26
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_d65a2ab909d30e6c9f2d0971a60ec20046318838cfb411969d8925df0cebc03f = $this->env->getExtension("native_profiler");
        $__internal_d65a2ab909d30e6c9f2d0971a60ec20046318838cfb411969d8925df0cebc03f->enter($__internal_d65a2ab909d30e6c9f2d0971a60ec20046318838cfb411969d8925df0cebc03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

        // line 27
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 28
            echo "        <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "tipo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "prioridad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "pais", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Departamento", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Localidad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Direccion", array()), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-success\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caog_horarios_usuario_actividad_vincular", array("id" => $this->getAttribute($context["actividad"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Informacion</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d65a2ab909d30e6c9f2d0971a60ec20046318838cfb411969d8925df0cebc03f->leave($__internal_d65a2ab909d30e6c9f2d0971a60ec20046318838cfb411969d8925df0cebc03f_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:User:Actividad/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 38,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  111 => 28,  106 => 27,  100 => 26,  84 => 16,  78 => 15,  67 => 12,  58 => 9,  54 => 7,  50 => 6,  47 => 5,  41 => 4,  34 => 3,  32 => 2,  30 => 1,  11 => 3,);
    }
}
/* {% set idList = 'listCompanies' %}*/
/* {% set titleBody = 'Actividades' %}*/
/* {% extends 'CaogHorariosBundle::/general/listBase.html.twig' %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*             <div class="alert alert-success">*/
/*                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*                 {{flashMessage}}*/
/*             </div>*/
/*         {% endfor%}*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endblock %}*/
/* {% block theadList %}*/
/*     <th>Nombre</th>*/
/*     <th>Tipo</th>*/
/*     <th>Prioridad</th>*/
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
/*             <td>{{actividad.pais}}</td>*/
/*             <td>{{actividad.Departamento}}</td>*/
/*             <td>{{actividad.Ciudad}}</td>*/
/*             <td>{{actividad.Localidad}}</td>*/
/*             <td>{{actividad.Direccion}}</td>*/
/*             <td>*/
/*                 <a class="btn btn-success" href="{{path('caog_horarios_usuario_actividad_vincular', {'id': actividad.id})}}"><i class="glyphicon glyphicon-plus"></i> Informacion</a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

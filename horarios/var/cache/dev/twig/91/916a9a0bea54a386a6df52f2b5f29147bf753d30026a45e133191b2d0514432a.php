<?php

/* @CaogHorarios/Empresa/Actividad/list.html.twig */
class __TwigTemplate_de96b3507d12dc67d9cdafdc7a917969edc439ee53fcad8b59d283983ed33f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "@CaogHorarios/Empresa/Actividad/list.html.twig", 3);
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
        $__internal_36ceaea07659fe20d10c196af1b57424e4b0cb12b94b5280bcc6c6ce461ed43c = $this->env->getExtension("native_profiler");
        $__internal_36ceaea07659fe20d10c196af1b57424e4b0cb12b94b5280bcc6c6ce461ed43c->enter($__internal_36ceaea07659fe20d10c196af1b57424e4b0cb12b94b5280bcc6c6ce461ed43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/Empresa/Actividad/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Empresas";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36ceaea07659fe20d10c196af1b57424e4b0cb12b94b5280bcc6c6ce461ed43c->leave($__internal_36ceaea07659fe20d10c196af1b57424e4b0cb12b94b5280bcc6c6ce461ed43c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b636cb33eb6bc1443f06fd9be5b1b56070326b6b328d776771ec3efefa486af5 = $this->env->getExtension("native_profiler");
        $__internal_b636cb33eb6bc1443f06fd9be5b1b56070326b6b328d776771ec3efefa486af5->enter($__internal_b636cb33eb6bc1443f06fd9be5b1b56070326b6b328d776771ec3efefa486af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b636cb33eb6bc1443f06fd9be5b1b56070326b6b328d776771ec3efefa486af5->leave($__internal_b636cb33eb6bc1443f06fd9be5b1b56070326b6b328d776771ec3efefa486af5_prof);

    }

    // line 15
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_6996944f68fcb8f19d5260cb63b1e933a1b49947a4282c6154ab024638f75197 = $this->env->getExtension("native_profiler");
        $__internal_6996944f68fcb8f19d5260cb63b1e933a1b49947a4282c6154ab024638f75197->enter($__internal_6996944f68fcb8f19d5260cb63b1e933a1b49947a4282c6154ab024638f75197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 16
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
        
        $__internal_6996944f68fcb8f19d5260cb63b1e933a1b49947a4282c6154ab024638f75197->leave($__internal_6996944f68fcb8f19d5260cb63b1e933a1b49947a4282c6154ab024638f75197_prof);

    }

    // line 27
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_37ff3b3dc1760f4678b208eaba731863c2f8dc6a3cc0406947c342197e852c12 = $this->env->getExtension("native_profiler");
        $__internal_37ff3b3dc1760f4678b208eaba731863c2f8dc6a3cc0406947c342197e852c12->enter($__internal_37ff3b3dc1760f4678b208eaba731863c2f8dc6a3cc0406947c342197e852c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 29
            echo "        <tr>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "tipo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "prioridad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["actividad"], "empresa", array()), "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "pais", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Departamento", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Localidad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Direccion", array()), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-success\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caog_horarios_empresa_actividad_vincular", array("id" => $this->getAttribute($context["actividad"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Informacion</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_37ff3b3dc1760f4678b208eaba731863c2f8dc6a3cc0406947c342197e852c12->leave($__internal_37ff3b3dc1760f4678b208eaba731863c2f8dc6a3cc0406947c342197e852c12_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/Empresa/Actividad/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 40,  147 => 38,  143 => 37,  139 => 36,  135 => 35,  131 => 34,  127 => 33,  123 => 32,  119 => 31,  115 => 30,  112 => 29,  107 => 28,  101 => 27,  84 => 16,  78 => 15,  67 => 12,  58 => 9,  54 => 7,  50 => 6,  47 => 5,  41 => 4,  34 => 3,  32 => 2,  30 => 1,  11 => 3,);
    }
}
/* {% set idList = 'listCompanies' %}*/
/* {% set titleBody = 'Empresas' %}*/
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
/*                 <a class="btn btn-success" href="{{path('caog_horarios_empresa_actividad_vincular', {'id': actividad.id})}}"><i class="glyphicon glyphicon-plus"></i> Informacion</a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

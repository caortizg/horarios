<?php

/* @CaogHorarios/User/Actividad/list.html.twig */
class __TwigTemplate_ebfb21f7ff1a6e1d1b248cab6557faa00ca82f53cd784fecaeb8ba2fc802463b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "@CaogHorarios/User/Actividad/list.html.twig", 3);
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
        $__internal_ea879886de617d0d22efb65675c0145125348162af33e48334afad7bfdac0cf6 = $this->env->getExtension("native_profiler");
        $__internal_ea879886de617d0d22efb65675c0145125348162af33e48334afad7bfdac0cf6->enter($__internal_ea879886de617d0d22efb65675c0145125348162af33e48334afad7bfdac0cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/User/Actividad/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Empresas";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea879886de617d0d22efb65675c0145125348162af33e48334afad7bfdac0cf6->leave($__internal_ea879886de617d0d22efb65675c0145125348162af33e48334afad7bfdac0cf6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6431e8fc6c09ba81770f574a00b3773663dfcb8840cd8cd87e0cc582069ebbaa = $this->env->getExtension("native_profiler");
        $__internal_6431e8fc6c09ba81770f574a00b3773663dfcb8840cd8cd87e0cc582069ebbaa->enter($__internal_6431e8fc6c09ba81770f574a00b3773663dfcb8840cd8cd87e0cc582069ebbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6431e8fc6c09ba81770f574a00b3773663dfcb8840cd8cd87e0cc582069ebbaa->leave($__internal_6431e8fc6c09ba81770f574a00b3773663dfcb8840cd8cd87e0cc582069ebbaa_prof);

    }

    // line 15
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_4ad038cf3eec98b837c8ae23cc19dc72433d1610e41636f8915edef487885329 = $this->env->getExtension("native_profiler");
        $__internal_4ad038cf3eec98b837c8ae23cc19dc72433d1610e41636f8915edef487885329->enter($__internal_4ad038cf3eec98b837c8ae23cc19dc72433d1610e41636f8915edef487885329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

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
        
        $__internal_4ad038cf3eec98b837c8ae23cc19dc72433d1610e41636f8915edef487885329->leave($__internal_4ad038cf3eec98b837c8ae23cc19dc72433d1610e41636f8915edef487885329_prof);

    }

    // line 27
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_c2ce02253e8338152f7da28e1cfa5526703a39a34d1ee6d292facb25730ab831 = $this->env->getExtension("native_profiler");
        $__internal_c2ce02253e8338152f7da28e1cfa5526703a39a34d1ee6d292facb25730ab831->enter($__internal_c2ce02253e8338152f7da28e1cfa5526703a39a34d1ee6d292facb25730ab831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

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
        
        $__internal_c2ce02253e8338152f7da28e1cfa5526703a39a34d1ee6d292facb25730ab831->leave($__internal_c2ce02253e8338152f7da28e1cfa5526703a39a34d1ee6d292facb25730ab831_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/User/Actividad/list.html.twig";
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

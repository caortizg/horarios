<?php

/* CaogHorariosBundle:Empresa:list.html.twig */
class __TwigTemplate_ef56a4d1423331cb267e2054ed198617fb022f6b0ef85bcd6a5b8175827e44fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "CaogHorariosBundle:Empresa:list.html.twig", 3);
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
        $__internal_c4a7b9872f5fda51dcea83c86168a7467c0ed791da5c62fd4bf3d723f2f4daa4 = $this->env->getExtension("native_profiler");
        $__internal_c4a7b9872f5fda51dcea83c86168a7467c0ed791da5c62fd4bf3d723f2f4daa4->enter($__internal_c4a7b9872f5fda51dcea83c86168a7467c0ed791da5c62fd4bf3d723f2f4daa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:Empresa:list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Empresas";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4a7b9872f5fda51dcea83c86168a7467c0ed791da5c62fd4bf3d723f2f4daa4->leave($__internal_c4a7b9872f5fda51dcea83c86168a7467c0ed791da5c62fd4bf3d723f2f4daa4_prof);

    }

    // line 4
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_f25e3c7a4f8318b6fde3dcbea99f838b23720ab2be35ee915b9e7146b617c7fb = $this->env->getExtension("native_profiler");
        $__internal_f25e3c7a4f8318b6fde3dcbea99f838b23720ab2be35ee915b9e7146b617c7fb->enter($__internal_f25e3c7a4f8318b6fde3dcbea99f838b23720ab2be35ee915b9e7146b617c7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 5
        echo "    <th>Name</th>
    <th>Pais</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Localidad</th>
    <th>Direccion</th>
";
        
        $__internal_f25e3c7a4f8318b6fde3dcbea99f838b23720ab2be35ee915b9e7146b617c7fb->leave($__internal_f25e3c7a4f8318b6fde3dcbea99f838b23720ab2be35ee915b9e7146b617c7fb_prof);

    }

    // line 12
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_3b73257cc1dfd0e351768736980b4a2d4abf7e8cb0b078373ab3dfe2402749a3 = $this->env->getExtension("native_profiler");
        $__internal_3b73257cc1dfd0e351768736980b4a2d4abf7e8cb0b078373ab3dfe2402749a3->enter($__internal_3b73257cc1dfd0e351768736980b4a2d4abf7e8cb0b078373ab3dfe2402749a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "pais", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "Departamento", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "Ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "Localidad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "Direccion", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3b73257cc1dfd0e351768736980b4a2d4abf7e8cb0b078373ab3dfe2402749a3->leave($__internal_3b73257cc1dfd0e351768736980b4a2d4abf7e8cb0b078373ab3dfe2402749a3_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:Empresa:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  70 => 14,  65 => 13,  59 => 12,  46 => 5,  40 => 4,  33 => 3,  31 => 2,  29 => 1,  11 => 3,);
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
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_465560c1f5f5d013a0e2216022754a5aae38ee0ca67f04e0e949cca8bd601198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bd67b449097e086019ebffc0e3e416bb09041c38a196a54013e0c9df6791e09 = $this->env->getExtension("native_profiler");
        $__internal_3bd67b449097e086019ebffc0e3e416bb09041c38a196a54013e0c9df6791e09->enter($__internal_3bd67b449097e086019ebffc0e3e416bb09041c38a196a54013e0c9df6791e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd67b449097e086019ebffc0e3e416bb09041c38a196a54013e0c9df6791e09->leave($__internal_3bd67b449097e086019ebffc0e3e416bb09041c38a196a54013e0c9df6791e09_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e766a4172156a8aae69d1ad910e87e80558f6bf302d35c60550001563a466d6e = $this->env->getExtension("native_profiler");
        $__internal_e766a4172156a8aae69d1ad910e87e80558f6bf302d35c60550001563a466d6e->enter($__internal_e766a4172156a8aae69d1ad910e87e80558f6bf302d35c60550001563a466d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e766a4172156a8aae69d1ad910e87e80558f6bf302d35c60550001563a466d6e->leave($__internal_e766a4172156a8aae69d1ad910e87e80558f6bf302d35c60550001563a466d6e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d21322235b6c03dd500fcbc80dccb1aeecc2e9fb83cc01f0532abe16a6896b57 = $this->env->getExtension("native_profiler");
        $__internal_d21322235b6c03dd500fcbc80dccb1aeecc2e9fb83cc01f0532abe16a6896b57->enter($__internal_d21322235b6c03dd500fcbc80dccb1aeecc2e9fb83cc01f0532abe16a6896b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d21322235b6c03dd500fcbc80dccb1aeecc2e9fb83cc01f0532abe16a6896b57->leave($__internal_d21322235b6c03dd500fcbc80dccb1aeecc2e9fb83cc01f0532abe16a6896b57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a15dd5dc0dad36556db229760ede192c8e9c7ae8565ab2e089875497924d20b = $this->env->getExtension("native_profiler");
        $__internal_4a15dd5dc0dad36556db229760ede192c8e9c7ae8565ab2e089875497924d20b->enter($__internal_4a15dd5dc0dad36556db229760ede192c8e9c7ae8565ab2e089875497924d20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a15dd5dc0dad36556db229760ede192c8e9c7ae8565ab2e089875497924d20b->leave($__internal_4a15dd5dc0dad36556db229760ede192c8e9c7ae8565ab2e089875497924d20b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

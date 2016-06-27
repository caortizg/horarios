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
        $__internal_d46b03dd5be184a9c61b11a726701013f2a91a9c0ad68426bbf656c2a0a83bed = $this->env->getExtension("native_profiler");
        $__internal_d46b03dd5be184a9c61b11a726701013f2a91a9c0ad68426bbf656c2a0a83bed->enter($__internal_d46b03dd5be184a9c61b11a726701013f2a91a9c0ad68426bbf656c2a0a83bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46b03dd5be184a9c61b11a726701013f2a91a9c0ad68426bbf656c2a0a83bed->leave($__internal_d46b03dd5be184a9c61b11a726701013f2a91a9c0ad68426bbf656c2a0a83bed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1029b23fb541d81803d3ccd16f134e07e68db7417abfe2146e7dd256faa9de0 = $this->env->getExtension("native_profiler");
        $__internal_f1029b23fb541d81803d3ccd16f134e07e68db7417abfe2146e7dd256faa9de0->enter($__internal_f1029b23fb541d81803d3ccd16f134e07e68db7417abfe2146e7dd256faa9de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1029b23fb541d81803d3ccd16f134e07e68db7417abfe2146e7dd256faa9de0->leave($__internal_f1029b23fb541d81803d3ccd16f134e07e68db7417abfe2146e7dd256faa9de0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f59d9c7e0d55a14eaf1c0b7da904bb9fbd2cc1717b1e33b41e4f4f03c2c974d2 = $this->env->getExtension("native_profiler");
        $__internal_f59d9c7e0d55a14eaf1c0b7da904bb9fbd2cc1717b1e33b41e4f4f03c2c974d2->enter($__internal_f59d9c7e0d55a14eaf1c0b7da904bb9fbd2cc1717b1e33b41e4f4f03c2c974d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f59d9c7e0d55a14eaf1c0b7da904bb9fbd2cc1717b1e33b41e4f4f03c2c974d2->leave($__internal_f59d9c7e0d55a14eaf1c0b7da904bb9fbd2cc1717b1e33b41e4f4f03c2c974d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87b7658848da9acb3bdc761d3a24133b00a20084f570ecfb9c128ab2529e9334 = $this->env->getExtension("native_profiler");
        $__internal_87b7658848da9acb3bdc761d3a24133b00a20084f570ecfb9c128ab2529e9334->enter($__internal_87b7658848da9acb3bdc761d3a24133b00a20084f570ecfb9c128ab2529e9334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_87b7658848da9acb3bdc761d3a24133b00a20084f570ecfb9c128ab2529e9334->leave($__internal_87b7658848da9acb3bdc761d3a24133b00a20084f570ecfb9c128ab2529e9334_prof);

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

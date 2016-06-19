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
        $__internal_06b0b1c0bff582d0befc281819ec1812b2542884bd60ebd536d29ef73a8fb105 = $this->env->getExtension("native_profiler");
        $__internal_06b0b1c0bff582d0befc281819ec1812b2542884bd60ebd536d29ef73a8fb105->enter($__internal_06b0b1c0bff582d0befc281819ec1812b2542884bd60ebd536d29ef73a8fb105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b0b1c0bff582d0befc281819ec1812b2542884bd60ebd536d29ef73a8fb105->leave($__internal_06b0b1c0bff582d0befc281819ec1812b2542884bd60ebd536d29ef73a8fb105_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d174e5edb2e1fcfb71fa93956428a4afaed6c42c9a306aaaeab282fbc39a8100 = $this->env->getExtension("native_profiler");
        $__internal_d174e5edb2e1fcfb71fa93956428a4afaed6c42c9a306aaaeab282fbc39a8100->enter($__internal_d174e5edb2e1fcfb71fa93956428a4afaed6c42c9a306aaaeab282fbc39a8100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d174e5edb2e1fcfb71fa93956428a4afaed6c42c9a306aaaeab282fbc39a8100->leave($__internal_d174e5edb2e1fcfb71fa93956428a4afaed6c42c9a306aaaeab282fbc39a8100_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e5cc9863908791ecc8bca3b40197a20fcd7426cd751a22944d03116abce862e = $this->env->getExtension("native_profiler");
        $__internal_2e5cc9863908791ecc8bca3b40197a20fcd7426cd751a22944d03116abce862e->enter($__internal_2e5cc9863908791ecc8bca3b40197a20fcd7426cd751a22944d03116abce862e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e5cc9863908791ecc8bca3b40197a20fcd7426cd751a22944d03116abce862e->leave($__internal_2e5cc9863908791ecc8bca3b40197a20fcd7426cd751a22944d03116abce862e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3805f63be133817bfa9a1cd74e506e15f7ea8ecc407e7e58a729c60973049be = $this->env->getExtension("native_profiler");
        $__internal_e3805f63be133817bfa9a1cd74e506e15f7ea8ecc407e7e58a729c60973049be->enter($__internal_e3805f63be133817bfa9a1cd74e506e15f7ea8ecc407e7e58a729c60973049be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e3805f63be133817bfa9a1cd74e506e15f7ea8ecc407e7e58a729c60973049be->leave($__internal_e3805f63be133817bfa9a1cd74e506e15f7ea8ecc407e7e58a729c60973049be_prof);

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

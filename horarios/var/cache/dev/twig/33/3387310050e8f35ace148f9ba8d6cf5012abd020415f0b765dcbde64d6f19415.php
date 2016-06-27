<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_881b691bbed6a7e629cd4d14148e29018c7c9bd706fc08a28aeb6358265d0f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_0a9203e096a6a2c5c94c413273298781aade8cb96c51ba7b855f6b9e44a2bba9 = $this->env->getExtension("native_profiler");
        $__internal_0a9203e096a6a2c5c94c413273298781aade8cb96c51ba7b855f6b9e44a2bba9->enter($__internal_0a9203e096a6a2c5c94c413273298781aade8cb96c51ba7b855f6b9e44a2bba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a9203e096a6a2c5c94c413273298781aade8cb96c51ba7b855f6b9e44a2bba9->leave($__internal_0a9203e096a6a2c5c94c413273298781aade8cb96c51ba7b855f6b9e44a2bba9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b357bcd1146c767f5a0aa7d328738af30d01a4a4e3e88dcbcafd5328a24cf3b2 = $this->env->getExtension("native_profiler");
        $__internal_b357bcd1146c767f5a0aa7d328738af30d01a4a4e3e88dcbcafd5328a24cf3b2->enter($__internal_b357bcd1146c767f5a0aa7d328738af30d01a4a4e3e88dcbcafd5328a24cf3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b357bcd1146c767f5a0aa7d328738af30d01a4a4e3e88dcbcafd5328a24cf3b2->leave($__internal_b357bcd1146c767f5a0aa7d328738af30d01a4a4e3e88dcbcafd5328a24cf3b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08e282d5527c9e1b22f7d9dd2b877247c0e70aff43249c497e4f56e9f876f239 = $this->env->getExtension("native_profiler");
        $__internal_08e282d5527c9e1b22f7d9dd2b877247c0e70aff43249c497e4f56e9f876f239->enter($__internal_08e282d5527c9e1b22f7d9dd2b877247c0e70aff43249c497e4f56e9f876f239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08e282d5527c9e1b22f7d9dd2b877247c0e70aff43249c497e4f56e9f876f239->leave($__internal_08e282d5527c9e1b22f7d9dd2b877247c0e70aff43249c497e4f56e9f876f239_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdde0d97e2a225b5e62b0549a0133a3a9a079810b75cde4ae5f38fef2ef5e0f5 = $this->env->getExtension("native_profiler");
        $__internal_cdde0d97e2a225b5e62b0549a0133a3a9a079810b75cde4ae5f38fef2ef5e0f5->enter($__internal_cdde0d97e2a225b5e62b0549a0133a3a9a079810b75cde4ae5f38fef2ef5e0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cdde0d97e2a225b5e62b0549a0133a3a9a079810b75cde4ae5f38fef2ef5e0f5->leave($__internal_cdde0d97e2a225b5e62b0549a0133a3a9a079810b75cde4ae5f38fef2ef5e0f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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

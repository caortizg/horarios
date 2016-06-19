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
        $__internal_eedabd12cd6c42d7a1b5bdd8590856898829cd1af32296a58004d28434e97072 = $this->env->getExtension("native_profiler");
        $__internal_eedabd12cd6c42d7a1b5bdd8590856898829cd1af32296a58004d28434e97072->enter($__internal_eedabd12cd6c42d7a1b5bdd8590856898829cd1af32296a58004d28434e97072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eedabd12cd6c42d7a1b5bdd8590856898829cd1af32296a58004d28434e97072->leave($__internal_eedabd12cd6c42d7a1b5bdd8590856898829cd1af32296a58004d28434e97072_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52041d803ed2bdff04e7c37b8e9ffce151587d0e755c159475114a2de15c98ea = $this->env->getExtension("native_profiler");
        $__internal_52041d803ed2bdff04e7c37b8e9ffce151587d0e755c159475114a2de15c98ea->enter($__internal_52041d803ed2bdff04e7c37b8e9ffce151587d0e755c159475114a2de15c98ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52041d803ed2bdff04e7c37b8e9ffce151587d0e755c159475114a2de15c98ea->leave($__internal_52041d803ed2bdff04e7c37b8e9ffce151587d0e755c159475114a2de15c98ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c17f28ea2a20370453d64a00e9610072da81f946bd42a1d90f8dda39c52f2df9 = $this->env->getExtension("native_profiler");
        $__internal_c17f28ea2a20370453d64a00e9610072da81f946bd42a1d90f8dda39c52f2df9->enter($__internal_c17f28ea2a20370453d64a00e9610072da81f946bd42a1d90f8dda39c52f2df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c17f28ea2a20370453d64a00e9610072da81f946bd42a1d90f8dda39c52f2df9->leave($__internal_c17f28ea2a20370453d64a00e9610072da81f946bd42a1d90f8dda39c52f2df9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f1754e2c91270ba804f4cf049ac6ae58ce2a03ac672a20419600b5c5ad38ea2 = $this->env->getExtension("native_profiler");
        $__internal_0f1754e2c91270ba804f4cf049ac6ae58ce2a03ac672a20419600b5c5ad38ea2->enter($__internal_0f1754e2c91270ba804f4cf049ac6ae58ce2a03ac672a20419600b5c5ad38ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f1754e2c91270ba804f4cf049ac6ae58ce2a03ac672a20419600b5c5ad38ea2->leave($__internal_0f1754e2c91270ba804f4cf049ac6ae58ce2a03ac672a20419600b5c5ad38ea2_prof);

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

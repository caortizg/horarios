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
        $__internal_7ad131e2cbeb953fa424140e25606db8eae28e61881a04977e72ee05512d8f31 = $this->env->getExtension("native_profiler");
        $__internal_7ad131e2cbeb953fa424140e25606db8eae28e61881a04977e72ee05512d8f31->enter($__internal_7ad131e2cbeb953fa424140e25606db8eae28e61881a04977e72ee05512d8f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ad131e2cbeb953fa424140e25606db8eae28e61881a04977e72ee05512d8f31->leave($__internal_7ad131e2cbeb953fa424140e25606db8eae28e61881a04977e72ee05512d8f31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df3d071030389d2755ccb8744e7daf4e3efe7d3fb1fc313d945f60aaca20c283 = $this->env->getExtension("native_profiler");
        $__internal_df3d071030389d2755ccb8744e7daf4e3efe7d3fb1fc313d945f60aaca20c283->enter($__internal_df3d071030389d2755ccb8744e7daf4e3efe7d3fb1fc313d945f60aaca20c283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df3d071030389d2755ccb8744e7daf4e3efe7d3fb1fc313d945f60aaca20c283->leave($__internal_df3d071030389d2755ccb8744e7daf4e3efe7d3fb1fc313d945f60aaca20c283_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56a10b88a8ede2417e863b280f916271db1db01001e64d1044ca28fa3bde589d = $this->env->getExtension("native_profiler");
        $__internal_56a10b88a8ede2417e863b280f916271db1db01001e64d1044ca28fa3bde589d->enter($__internal_56a10b88a8ede2417e863b280f916271db1db01001e64d1044ca28fa3bde589d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_56a10b88a8ede2417e863b280f916271db1db01001e64d1044ca28fa3bde589d->leave($__internal_56a10b88a8ede2417e863b280f916271db1db01001e64d1044ca28fa3bde589d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15874957a17dfe79f6aebc0fa89378095de6b794c4f8fb609b2ab78cf46d9614 = $this->env->getExtension("native_profiler");
        $__internal_15874957a17dfe79f6aebc0fa89378095de6b794c4f8fb609b2ab78cf46d9614->enter($__internal_15874957a17dfe79f6aebc0fa89378095de6b794c4f8fb609b2ab78cf46d9614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_15874957a17dfe79f6aebc0fa89378095de6b794c4f8fb609b2ab78cf46d9614->leave($__internal_15874957a17dfe79f6aebc0fa89378095de6b794c4f8fb609b2ab78cf46d9614_prof);

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

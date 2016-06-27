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
        $__internal_60b9853c869bf72c44fed9819209440539e912eba00332e2dddc1cccf7f38f89 = $this->env->getExtension("native_profiler");
        $__internal_60b9853c869bf72c44fed9819209440539e912eba00332e2dddc1cccf7f38f89->enter($__internal_60b9853c869bf72c44fed9819209440539e912eba00332e2dddc1cccf7f38f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b9853c869bf72c44fed9819209440539e912eba00332e2dddc1cccf7f38f89->leave($__internal_60b9853c869bf72c44fed9819209440539e912eba00332e2dddc1cccf7f38f89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ec5f723628ca03411fc7f36fb8f72f02bf75f31fe05182ef83db7f3c3c43c46 = $this->env->getExtension("native_profiler");
        $__internal_7ec5f723628ca03411fc7f36fb8f72f02bf75f31fe05182ef83db7f3c3c43c46->enter($__internal_7ec5f723628ca03411fc7f36fb8f72f02bf75f31fe05182ef83db7f3c3c43c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ec5f723628ca03411fc7f36fb8f72f02bf75f31fe05182ef83db7f3c3c43c46->leave($__internal_7ec5f723628ca03411fc7f36fb8f72f02bf75f31fe05182ef83db7f3c3c43c46_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_779acb61db26a6b8c1cd545867b168c5836f60599f94b9cc16354f1a08b2fc3d = $this->env->getExtension("native_profiler");
        $__internal_779acb61db26a6b8c1cd545867b168c5836f60599f94b9cc16354f1a08b2fc3d->enter($__internal_779acb61db26a6b8c1cd545867b168c5836f60599f94b9cc16354f1a08b2fc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_779acb61db26a6b8c1cd545867b168c5836f60599f94b9cc16354f1a08b2fc3d->leave($__internal_779acb61db26a6b8c1cd545867b168c5836f60599f94b9cc16354f1a08b2fc3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_094bc2bbe8c4aa5ca12fed0ca1f3675e79f0489156849dab2a878a41847e03cc = $this->env->getExtension("native_profiler");
        $__internal_094bc2bbe8c4aa5ca12fed0ca1f3675e79f0489156849dab2a878a41847e03cc->enter($__internal_094bc2bbe8c4aa5ca12fed0ca1f3675e79f0489156849dab2a878a41847e03cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_094bc2bbe8c4aa5ca12fed0ca1f3675e79f0489156849dab2a878a41847e03cc->leave($__internal_094bc2bbe8c4aa5ca12fed0ca1f3675e79f0489156849dab2a878a41847e03cc_prof);

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

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
        $__internal_cdf6728bd9eabbe3d1c0900ed09adf859c23d04778253556f781ecb7a6abafc5 = $this->env->getExtension("native_profiler");
        $__internal_cdf6728bd9eabbe3d1c0900ed09adf859c23d04778253556f781ecb7a6abafc5->enter($__internal_cdf6728bd9eabbe3d1c0900ed09adf859c23d04778253556f781ecb7a6abafc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf6728bd9eabbe3d1c0900ed09adf859c23d04778253556f781ecb7a6abafc5->leave($__internal_cdf6728bd9eabbe3d1c0900ed09adf859c23d04778253556f781ecb7a6abafc5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d0b79a224cbb45e98fa6db41d682c711b624a37607e59b4c2cc6867baddd5bad = $this->env->getExtension("native_profiler");
        $__internal_d0b79a224cbb45e98fa6db41d682c711b624a37607e59b4c2cc6867baddd5bad->enter($__internal_d0b79a224cbb45e98fa6db41d682c711b624a37607e59b4c2cc6867baddd5bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0b79a224cbb45e98fa6db41d682c711b624a37607e59b4c2cc6867baddd5bad->leave($__internal_d0b79a224cbb45e98fa6db41d682c711b624a37607e59b4c2cc6867baddd5bad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4b21788d4a51250da14ee1efa97adbf6b9143aeb63822e76b0307b8cda93b25 = $this->env->getExtension("native_profiler");
        $__internal_b4b21788d4a51250da14ee1efa97adbf6b9143aeb63822e76b0307b8cda93b25->enter($__internal_b4b21788d4a51250da14ee1efa97adbf6b9143aeb63822e76b0307b8cda93b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4b21788d4a51250da14ee1efa97adbf6b9143aeb63822e76b0307b8cda93b25->leave($__internal_b4b21788d4a51250da14ee1efa97adbf6b9143aeb63822e76b0307b8cda93b25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8667288fd77a1d9c6d325620a73b885f7b5dede12296f93e29d69e8e740ba80b = $this->env->getExtension("native_profiler");
        $__internal_8667288fd77a1d9c6d325620a73b885f7b5dede12296f93e29d69e8e740ba80b->enter($__internal_8667288fd77a1d9c6d325620a73b885f7b5dede12296f93e29d69e8e740ba80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8667288fd77a1d9c6d325620a73b885f7b5dede12296f93e29d69e8e740ba80b->leave($__internal_8667288fd77a1d9c6d325620a73b885f7b5dede12296f93e29d69e8e740ba80b_prof);

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

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_359b34f5765bd6f4925c91658ecca8a0f33ebcc10bc343fe714cf8e211264233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5bce641fb689883c75d10f8516141955ebb5280855c9ee6d2f2e8ca556c16f0 = $this->env->getExtension("native_profiler");
        $__internal_e5bce641fb689883c75d10f8516141955ebb5280855c9ee6d2f2e8ca556c16f0->enter($__internal_e5bce641fb689883c75d10f8516141955ebb5280855c9ee6d2f2e8ca556c16f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5bce641fb689883c75d10f8516141955ebb5280855c9ee6d2f2e8ca556c16f0->leave($__internal_e5bce641fb689883c75d10f8516141955ebb5280855c9ee6d2f2e8ca556c16f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cfe55193da51bf14c25c834e90b8dd8ab12da47e3fd466b51c636961b9ae89b = $this->env->getExtension("native_profiler");
        $__internal_6cfe55193da51bf14c25c834e90b8dd8ab12da47e3fd466b51c636961b9ae89b->enter($__internal_6cfe55193da51bf14c25c834e90b8dd8ab12da47e3fd466b51c636961b9ae89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6cfe55193da51bf14c25c834e90b8dd8ab12da47e3fd466b51c636961b9ae89b->leave($__internal_6cfe55193da51bf14c25c834e90b8dd8ab12da47e3fd466b51c636961b9ae89b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3e4e933fdceeca42e7b7e3d20a6b70c234ed0cc96063dd88e7be122db8d12cd = $this->env->getExtension("native_profiler");
        $__internal_b3e4e933fdceeca42e7b7e3d20a6b70c234ed0cc96063dd88e7be122db8d12cd->enter($__internal_b3e4e933fdceeca42e7b7e3d20a6b70c234ed0cc96063dd88e7be122db8d12cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b3e4e933fdceeca42e7b7e3d20a6b70c234ed0cc96063dd88e7be122db8d12cd->leave($__internal_b3e4e933fdceeca42e7b7e3d20a6b70c234ed0cc96063dd88e7be122db8d12cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e61cf2e0233005c170d5a47c4f3a63603d1311247a830ad8494841a73091ac09 = $this->env->getExtension("native_profiler");
        $__internal_e61cf2e0233005c170d5a47c4f3a63603d1311247a830ad8494841a73091ac09->enter($__internal_e61cf2e0233005c170d5a47c4f3a63603d1311247a830ad8494841a73091ac09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e61cf2e0233005c170d5a47c4f3a63603d1311247a830ad8494841a73091ac09->leave($__internal_e61cf2e0233005c170d5a47c4f3a63603d1311247a830ad8494841a73091ac09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

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
        $__internal_2f5f0a871b3c1a6e5e9864be5e806ad6d99856dc3169d936758cb84b1c4e8c69 = $this->env->getExtension("native_profiler");
        $__internal_2f5f0a871b3c1a6e5e9864be5e806ad6d99856dc3169d936758cb84b1c4e8c69->enter($__internal_2f5f0a871b3c1a6e5e9864be5e806ad6d99856dc3169d936758cb84b1c4e8c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5f0a871b3c1a6e5e9864be5e806ad6d99856dc3169d936758cb84b1c4e8c69->leave($__internal_2f5f0a871b3c1a6e5e9864be5e806ad6d99856dc3169d936758cb84b1c4e8c69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96e3ac3836233b1f57898b502365de9948b8be7578e4a5a2cafda5ba73a80003 = $this->env->getExtension("native_profiler");
        $__internal_96e3ac3836233b1f57898b502365de9948b8be7578e4a5a2cafda5ba73a80003->enter($__internal_96e3ac3836233b1f57898b502365de9948b8be7578e4a5a2cafda5ba73a80003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_96e3ac3836233b1f57898b502365de9948b8be7578e4a5a2cafda5ba73a80003->leave($__internal_96e3ac3836233b1f57898b502365de9948b8be7578e4a5a2cafda5ba73a80003_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc7f89f7d9fc0b08beb49eb84b087c5129091b209ef4e27afdf947a13d573db3 = $this->env->getExtension("native_profiler");
        $__internal_fc7f89f7d9fc0b08beb49eb84b087c5129091b209ef4e27afdf947a13d573db3->enter($__internal_fc7f89f7d9fc0b08beb49eb84b087c5129091b209ef4e27afdf947a13d573db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fc7f89f7d9fc0b08beb49eb84b087c5129091b209ef4e27afdf947a13d573db3->leave($__internal_fc7f89f7d9fc0b08beb49eb84b087c5129091b209ef4e27afdf947a13d573db3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0ca98abf2529ec378f82c7f462fe1b7b0e333b8e32f5247e1b610a3885946a5 = $this->env->getExtension("native_profiler");
        $__internal_f0ca98abf2529ec378f82c7f462fe1b7b0e333b8e32f5247e1b610a3885946a5->enter($__internal_f0ca98abf2529ec378f82c7f462fe1b7b0e333b8e32f5247e1b610a3885946a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f0ca98abf2529ec378f82c7f462fe1b7b0e333b8e32f5247e1b610a3885946a5->leave($__internal_f0ca98abf2529ec378f82c7f462fe1b7b0e333b8e32f5247e1b610a3885946a5_prof);

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

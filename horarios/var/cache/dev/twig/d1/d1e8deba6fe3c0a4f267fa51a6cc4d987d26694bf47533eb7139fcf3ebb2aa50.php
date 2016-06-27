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
        $__internal_50f6e89495d1ee17c143403b0e3e4e4e93e65d0558a30576e0d1fe5c04554698 = $this->env->getExtension("native_profiler");
        $__internal_50f6e89495d1ee17c143403b0e3e4e4e93e65d0558a30576e0d1fe5c04554698->enter($__internal_50f6e89495d1ee17c143403b0e3e4e4e93e65d0558a30576e0d1fe5c04554698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f6e89495d1ee17c143403b0e3e4e4e93e65d0558a30576e0d1fe5c04554698->leave($__internal_50f6e89495d1ee17c143403b0e3e4e4e93e65d0558a30576e0d1fe5c04554698_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17cc78d946f4e2f04462043dae389ebc6f18ef5c96648878df9bf47ecf530b05 = $this->env->getExtension("native_profiler");
        $__internal_17cc78d946f4e2f04462043dae389ebc6f18ef5c96648878df9bf47ecf530b05->enter($__internal_17cc78d946f4e2f04462043dae389ebc6f18ef5c96648878df9bf47ecf530b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_17cc78d946f4e2f04462043dae389ebc6f18ef5c96648878df9bf47ecf530b05->leave($__internal_17cc78d946f4e2f04462043dae389ebc6f18ef5c96648878df9bf47ecf530b05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b76876c876686e4c26c1daf62950672fe5af826e24c16aa67e99d05a46eb8117 = $this->env->getExtension("native_profiler");
        $__internal_b76876c876686e4c26c1daf62950672fe5af826e24c16aa67e99d05a46eb8117->enter($__internal_b76876c876686e4c26c1daf62950672fe5af826e24c16aa67e99d05a46eb8117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b76876c876686e4c26c1daf62950672fe5af826e24c16aa67e99d05a46eb8117->leave($__internal_b76876c876686e4c26c1daf62950672fe5af826e24c16aa67e99d05a46eb8117_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6c30744b7abe8fdcc1961d8fa2d245d0565ff4acd121a5e65fdf34555b23326 = $this->env->getExtension("native_profiler");
        $__internal_a6c30744b7abe8fdcc1961d8fa2d245d0565ff4acd121a5e65fdf34555b23326->enter($__internal_a6c30744b7abe8fdcc1961d8fa2d245d0565ff4acd121a5e65fdf34555b23326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a6c30744b7abe8fdcc1961d8fa2d245d0565ff4acd121a5e65fdf34555b23326->leave($__internal_a6c30744b7abe8fdcc1961d8fa2d245d0565ff4acd121a5e65fdf34555b23326_prof);

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

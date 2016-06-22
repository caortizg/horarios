<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a8da7246ef501c52ed2c649ca64149e836c39bee97e9f671acb19db9f175ad80 extends Twig_Template
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
        $__internal_ec319f69419c0806657489078f7abd705d39b97ebb3ab881eed0a22e42e80f1a = $this->env->getExtension("native_profiler");
        $__internal_ec319f69419c0806657489078f7abd705d39b97ebb3ab881eed0a22e42e80f1a->enter($__internal_ec319f69419c0806657489078f7abd705d39b97ebb3ab881eed0a22e42e80f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec319f69419c0806657489078f7abd705d39b97ebb3ab881eed0a22e42e80f1a->leave($__internal_ec319f69419c0806657489078f7abd705d39b97ebb3ab881eed0a22e42e80f1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bf60c48d110968bd0dee457aad19d08a6d69e512ca45a36318c167d4a0d3c97 = $this->env->getExtension("native_profiler");
        $__internal_9bf60c48d110968bd0dee457aad19d08a6d69e512ca45a36318c167d4a0d3c97->enter($__internal_9bf60c48d110968bd0dee457aad19d08a6d69e512ca45a36318c167d4a0d3c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9bf60c48d110968bd0dee457aad19d08a6d69e512ca45a36318c167d4a0d3c97->leave($__internal_9bf60c48d110968bd0dee457aad19d08a6d69e512ca45a36318c167d4a0d3c97_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcf6b4fe5ee0f059a43bbda39c930e3ca86794aed34dc88be704965990fb776d = $this->env->getExtension("native_profiler");
        $__internal_bcf6b4fe5ee0f059a43bbda39c930e3ca86794aed34dc88be704965990fb776d->enter($__internal_bcf6b4fe5ee0f059a43bbda39c930e3ca86794aed34dc88be704965990fb776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bcf6b4fe5ee0f059a43bbda39c930e3ca86794aed34dc88be704965990fb776d->leave($__internal_bcf6b4fe5ee0f059a43bbda39c930e3ca86794aed34dc88be704965990fb776d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e88aa2b2df4968f699ce7afc4f086900e0169d059f97f6655bb2c0a0272fa01 = $this->env->getExtension("native_profiler");
        $__internal_3e88aa2b2df4968f699ce7afc4f086900e0169d059f97f6655bb2c0a0272fa01->enter($__internal_3e88aa2b2df4968f699ce7afc4f086900e0169d059f97f6655bb2c0a0272fa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3e88aa2b2df4968f699ce7afc4f086900e0169d059f97f6655bb2c0a0272fa01->leave($__internal_3e88aa2b2df4968f699ce7afc4f086900e0169d059f97f6655bb2c0a0272fa01_prof);

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

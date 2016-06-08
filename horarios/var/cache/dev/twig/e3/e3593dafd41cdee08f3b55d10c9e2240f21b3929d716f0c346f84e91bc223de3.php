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
        $__internal_c4d2ac70e6800534f114b0e37054aa42a36ec01ca9fa5b20e6620afd5f8e0685 = $this->env->getExtension("native_profiler");
        $__internal_c4d2ac70e6800534f114b0e37054aa42a36ec01ca9fa5b20e6620afd5f8e0685->enter($__internal_c4d2ac70e6800534f114b0e37054aa42a36ec01ca9fa5b20e6620afd5f8e0685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d2ac70e6800534f114b0e37054aa42a36ec01ca9fa5b20e6620afd5f8e0685->leave($__internal_c4d2ac70e6800534f114b0e37054aa42a36ec01ca9fa5b20e6620afd5f8e0685_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c7df34df80989f591f32deed3452e378c5eea87b23d768fd751d56744385382 = $this->env->getExtension("native_profiler");
        $__internal_8c7df34df80989f591f32deed3452e378c5eea87b23d768fd751d56744385382->enter($__internal_8c7df34df80989f591f32deed3452e378c5eea87b23d768fd751d56744385382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8c7df34df80989f591f32deed3452e378c5eea87b23d768fd751d56744385382->leave($__internal_8c7df34df80989f591f32deed3452e378c5eea87b23d768fd751d56744385382_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f39366a6d10473af1ed553c36bc723197f8e96932c5b921399f494233c769c1 = $this->env->getExtension("native_profiler");
        $__internal_7f39366a6d10473af1ed553c36bc723197f8e96932c5b921399f494233c769c1->enter($__internal_7f39366a6d10473af1ed553c36bc723197f8e96932c5b921399f494233c769c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7f39366a6d10473af1ed553c36bc723197f8e96932c5b921399f494233c769c1->leave($__internal_7f39366a6d10473af1ed553c36bc723197f8e96932c5b921399f494233c769c1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e4d3e1c5d304f000574d9171d5f3489c5aead37a2373298d78936f139bdee15 = $this->env->getExtension("native_profiler");
        $__internal_8e4d3e1c5d304f000574d9171d5f3489c5aead37a2373298d78936f139bdee15->enter($__internal_8e4d3e1c5d304f000574d9171d5f3489c5aead37a2373298d78936f139bdee15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8e4d3e1c5d304f000574d9171d5f3489c5aead37a2373298d78936f139bdee15->leave($__internal_8e4d3e1c5d304f000574d9171d5f3489c5aead37a2373298d78936f139bdee15_prof);

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

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
        $__internal_febc631564643cdb113f2d36bfcc85f2b383feadf32aa7bbc98cfed4f1bb3935 = $this->env->getExtension("native_profiler");
        $__internal_febc631564643cdb113f2d36bfcc85f2b383feadf32aa7bbc98cfed4f1bb3935->enter($__internal_febc631564643cdb113f2d36bfcc85f2b383feadf32aa7bbc98cfed4f1bb3935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_febc631564643cdb113f2d36bfcc85f2b383feadf32aa7bbc98cfed4f1bb3935->leave($__internal_febc631564643cdb113f2d36bfcc85f2b383feadf32aa7bbc98cfed4f1bb3935_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e777d8021e53aed6e02190dc848f4bb45972ae827f5e49d4d0490156735e689a = $this->env->getExtension("native_profiler");
        $__internal_e777d8021e53aed6e02190dc848f4bb45972ae827f5e49d4d0490156735e689a->enter($__internal_e777d8021e53aed6e02190dc848f4bb45972ae827f5e49d4d0490156735e689a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e777d8021e53aed6e02190dc848f4bb45972ae827f5e49d4d0490156735e689a->leave($__internal_e777d8021e53aed6e02190dc848f4bb45972ae827f5e49d4d0490156735e689a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a6a56291809c31cd384d7c22701a78d2a5a986ad4b3f4624f48a20eceec2219 = $this->env->getExtension("native_profiler");
        $__internal_4a6a56291809c31cd384d7c22701a78d2a5a986ad4b3f4624f48a20eceec2219->enter($__internal_4a6a56291809c31cd384d7c22701a78d2a5a986ad4b3f4624f48a20eceec2219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a6a56291809c31cd384d7c22701a78d2a5a986ad4b3f4624f48a20eceec2219->leave($__internal_4a6a56291809c31cd384d7c22701a78d2a5a986ad4b3f4624f48a20eceec2219_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_926c58ceefbd215ac7e816cc3dc1cfdd6a44dfa057456a29cf7b9306abf868e1 = $this->env->getExtension("native_profiler");
        $__internal_926c58ceefbd215ac7e816cc3dc1cfdd6a44dfa057456a29cf7b9306abf868e1->enter($__internal_926c58ceefbd215ac7e816cc3dc1cfdd6a44dfa057456a29cf7b9306abf868e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_926c58ceefbd215ac7e816cc3dc1cfdd6a44dfa057456a29cf7b9306abf868e1->leave($__internal_926c58ceefbd215ac7e816cc3dc1cfdd6a44dfa057456a29cf7b9306abf868e1_prof);

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

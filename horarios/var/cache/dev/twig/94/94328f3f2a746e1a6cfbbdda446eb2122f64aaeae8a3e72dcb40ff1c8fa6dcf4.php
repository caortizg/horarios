<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb4d9ca618b386af1c5341699d71366a055a1800780b1040b969fb9d21562ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_d2c7f3c8e9c8175052605efa23fcd570fb9f3be1beabf9f4cea568d905faa465 = $this->env->getExtension("native_profiler");
        $__internal_d2c7f3c8e9c8175052605efa23fcd570fb9f3be1beabf9f4cea568d905faa465->enter($__internal_d2c7f3c8e9c8175052605efa23fcd570fb9f3be1beabf9f4cea568d905faa465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2c7f3c8e9c8175052605efa23fcd570fb9f3be1beabf9f4cea568d905faa465->leave($__internal_d2c7f3c8e9c8175052605efa23fcd570fb9f3be1beabf9f4cea568d905faa465_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc7702aee77a77cc7e43205b781cb75de6643169093ebe9dc1246d2037237565 = $this->env->getExtension("native_profiler");
        $__internal_fc7702aee77a77cc7e43205b781cb75de6643169093ebe9dc1246d2037237565->enter($__internal_fc7702aee77a77cc7e43205b781cb75de6643169093ebe9dc1246d2037237565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc7702aee77a77cc7e43205b781cb75de6643169093ebe9dc1246d2037237565->leave($__internal_fc7702aee77a77cc7e43205b781cb75de6643169093ebe9dc1246d2037237565_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdeede9a63ad40b12fb469026ff2880324580e580e738c71ef3441cb1ebcce6e = $this->env->getExtension("native_profiler");
        $__internal_fdeede9a63ad40b12fb469026ff2880324580e580e738c71ef3441cb1ebcce6e->enter($__internal_fdeede9a63ad40b12fb469026ff2880324580e580e738c71ef3441cb1ebcce6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fdeede9a63ad40b12fb469026ff2880324580e580e738c71ef3441cb1ebcce6e->leave($__internal_fdeede9a63ad40b12fb469026ff2880324580e580e738c71ef3441cb1ebcce6e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_99486ac6889204b411a977bb80a715938150d171e37f2c1e0c3448fa0ec50b9e = $this->env->getExtension("native_profiler");
        $__internal_99486ac6889204b411a977bb80a715938150d171e37f2c1e0c3448fa0ec50b9e->enter($__internal_99486ac6889204b411a977bb80a715938150d171e37f2c1e0c3448fa0ec50b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_99486ac6889204b411a977bb80a715938150d171e37f2c1e0c3448fa0ec50b9e->leave($__internal_99486ac6889204b411a977bb80a715938150d171e37f2c1e0c3448fa0ec50b9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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

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
        $__internal_b6998bb183e6e0f9bd3b0005450da54aecf9b4512882de455683825011a73c50 = $this->env->getExtension("native_profiler");
        $__internal_b6998bb183e6e0f9bd3b0005450da54aecf9b4512882de455683825011a73c50->enter($__internal_b6998bb183e6e0f9bd3b0005450da54aecf9b4512882de455683825011a73c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6998bb183e6e0f9bd3b0005450da54aecf9b4512882de455683825011a73c50->leave($__internal_b6998bb183e6e0f9bd3b0005450da54aecf9b4512882de455683825011a73c50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_433d0bca6db0bc18dca925dcda143c86673a37a47d59ab2010d2950806282bdd = $this->env->getExtension("native_profiler");
        $__internal_433d0bca6db0bc18dca925dcda143c86673a37a47d59ab2010d2950806282bdd->enter($__internal_433d0bca6db0bc18dca925dcda143c86673a37a47d59ab2010d2950806282bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_433d0bca6db0bc18dca925dcda143c86673a37a47d59ab2010d2950806282bdd->leave($__internal_433d0bca6db0bc18dca925dcda143c86673a37a47d59ab2010d2950806282bdd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f3751194c87ea5cb2e9bfbd1d222d55c08b557da45c452085c6ad705efb5af7 = $this->env->getExtension("native_profiler");
        $__internal_8f3751194c87ea5cb2e9bfbd1d222d55c08b557da45c452085c6ad705efb5af7->enter($__internal_8f3751194c87ea5cb2e9bfbd1d222d55c08b557da45c452085c6ad705efb5af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8f3751194c87ea5cb2e9bfbd1d222d55c08b557da45c452085c6ad705efb5af7->leave($__internal_8f3751194c87ea5cb2e9bfbd1d222d55c08b557da45c452085c6ad705efb5af7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76b834ed5cbc9416a08ea5af49645d649f76171497bb075f6a720acf3a55f04e = $this->env->getExtension("native_profiler");
        $__internal_76b834ed5cbc9416a08ea5af49645d649f76171497bb075f6a720acf3a55f04e->enter($__internal_76b834ed5cbc9416a08ea5af49645d649f76171497bb075f6a720acf3a55f04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_76b834ed5cbc9416a08ea5af49645d649f76171497bb075f6a720acf3a55f04e->leave($__internal_76b834ed5cbc9416a08ea5af49645d649f76171497bb075f6a720acf3a55f04e_prof);

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

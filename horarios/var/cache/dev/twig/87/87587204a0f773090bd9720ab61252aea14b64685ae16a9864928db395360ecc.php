<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9c4515fcdd139fdaabaebc311b783814aadd0057965cc2930a79cfa110397c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37d241893e6683220563a1fbe56b7583702ee6467630f8e809153d201ec19bc8 = $this->env->getExtension("native_profiler");
        $__internal_37d241893e6683220563a1fbe56b7583702ee6467630f8e809153d201ec19bc8->enter($__internal_37d241893e6683220563a1fbe56b7583702ee6467630f8e809153d201ec19bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_37d241893e6683220563a1fbe56b7583702ee6467630f8e809153d201ec19bc8->leave($__internal_37d241893e6683220563a1fbe56b7583702ee6467630f8e809153d201ec19bc8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

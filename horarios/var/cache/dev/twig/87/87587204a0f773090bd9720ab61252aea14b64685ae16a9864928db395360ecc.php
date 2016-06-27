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
        $__internal_b4037541372f3e21fc5eb6e3a9c7d129b7671c9c8649f93519e78381d07bc603 = $this->env->getExtension("native_profiler");
        $__internal_b4037541372f3e21fc5eb6e3a9c7d129b7671c9c8649f93519e78381d07bc603->enter($__internal_b4037541372f3e21fc5eb6e3a9c7d129b7671c9c8649f93519e78381d07bc603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b4037541372f3e21fc5eb6e3a9c7d129b7671c9c8649f93519e78381d07bc603->leave($__internal_b4037541372f3e21fc5eb6e3a9c7d129b7671c9c8649f93519e78381d07bc603_prof);

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

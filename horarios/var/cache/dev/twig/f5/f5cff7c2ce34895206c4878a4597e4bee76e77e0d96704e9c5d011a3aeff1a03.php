<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_b66b95ef0e635b226d54a3130200f306ccbd1fd6bc51ac901a17b8858a96dca0 extends Twig_Template
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
        $__internal_b990ff88e0f9a2d78620db309f7a37bd979e23b5c20583caead0f92b3c632570 = $this->env->getExtension("native_profiler");
        $__internal_b990ff88e0f9a2d78620db309f7a37bd979e23b5c20583caead0f92b3c632570->enter($__internal_b990ff88e0f9a2d78620db309f7a37bd979e23b5c20583caead0f92b3c632570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b990ff88e0f9a2d78620db309f7a37bd979e23b5c20583caead0f92b3c632570->leave($__internal_b990ff88e0f9a2d78620db309f7a37bd979e23b5c20583caead0f92b3c632570_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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

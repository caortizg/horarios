<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0c3edc7cc93d5d4424070086785a8bfd7762bba969424e2dc9417ddb37748e65 extends Twig_Template
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
        $__internal_87702ad7ec01310545280f97a8fb8c67266e16736cbe3ad049816380e0bd18c6 = $this->env->getExtension("native_profiler");
        $__internal_87702ad7ec01310545280f97a8fb8c67266e16736cbe3ad049816380e0bd18c6->enter($__internal_87702ad7ec01310545280f97a8fb8c67266e16736cbe3ad049816380e0bd18c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_87702ad7ec01310545280f97a8fb8c67266e16736cbe3ad049816380e0bd18c6->leave($__internal_87702ad7ec01310545280f97a8fb8c67266e16736cbe3ad049816380e0bd18c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

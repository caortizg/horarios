<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_416a9916e0a84ad2f1d426693d55782129004ab43a1fa2c1083702eacb661285 extends Twig_Template
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
        $__internal_305b9a90f00b46fdb75ed6b952f8c68f9d14dc95fdae873550e18b7d0d683aec = $this->env->getExtension("native_profiler");
        $__internal_305b9a90f00b46fdb75ed6b952f8c68f9d14dc95fdae873550e18b7d0d683aec->enter($__internal_305b9a90f00b46fdb75ed6b952f8c68f9d14dc95fdae873550e18b7d0d683aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_305b9a90f00b46fdb75ed6b952f8c68f9d14dc95fdae873550e18b7d0d683aec->leave($__internal_305b9a90f00b46fdb75ed6b952f8c68f9d14dc95fdae873550e18b7d0d683aec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

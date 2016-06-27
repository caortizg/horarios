<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_63de4a6fe8cba0085d932a770287d45873107eb145ed89c45262a93b693aa7e0 extends Twig_Template
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
        $__internal_4b0443fc32070396611e717d14e34f89eb5ec0851477d9ae150b0adc301438e0 = $this->env->getExtension("native_profiler");
        $__internal_4b0443fc32070396611e717d14e34f89eb5ec0851477d9ae150b0adc301438e0->enter($__internal_4b0443fc32070396611e717d14e34f89eb5ec0851477d9ae150b0adc301438e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4b0443fc32070396611e717d14e34f89eb5ec0851477d9ae150b0adc301438e0->leave($__internal_4b0443fc32070396611e717d14e34f89eb5ec0851477d9ae150b0adc301438e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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

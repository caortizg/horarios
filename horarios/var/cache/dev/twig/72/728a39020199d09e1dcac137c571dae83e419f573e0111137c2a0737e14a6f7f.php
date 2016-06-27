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
        $__internal_8780084bc11086c1157f4a4b293101ad572dac8a3f20b263787d460929d4442e = $this->env->getExtension("native_profiler");
        $__internal_8780084bc11086c1157f4a4b293101ad572dac8a3f20b263787d460929d4442e->enter($__internal_8780084bc11086c1157f4a4b293101ad572dac8a3f20b263787d460929d4442e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_8780084bc11086c1157f4a4b293101ad572dac8a3f20b263787d460929d4442e->leave($__internal_8780084bc11086c1157f4a4b293101ad572dac8a3f20b263787d460929d4442e_prof);

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

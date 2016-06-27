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
        $__internal_4886a2d86f96a177fcdbb0f78bdab787ea988ab5105d8a51a1971359a645f0de = $this->env->getExtension("native_profiler");
        $__internal_4886a2d86f96a177fcdbb0f78bdab787ea988ab5105d8a51a1971359a645f0de->enter($__internal_4886a2d86f96a177fcdbb0f78bdab787ea988ab5105d8a51a1971359a645f0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_4886a2d86f96a177fcdbb0f78bdab787ea988ab5105d8a51a1971359a645f0de->leave($__internal_4886a2d86f96a177fcdbb0f78bdab787ea988ab5105d8a51a1971359a645f0de_prof);

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

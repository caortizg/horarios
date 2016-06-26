<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b448e9b7f12b5b768c96865a55779780fa44a2d6408c483880b7d9bc560d1c13 extends Twig_Template
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
        $__internal_d3e094cec8072d669cc5079ebb732c27d5032c25f7c8db3d41cb44642bbffe88 = $this->env->getExtension("native_profiler");
        $__internal_d3e094cec8072d669cc5079ebb732c27d5032c25f7c8db3d41cb44642bbffe88->enter($__internal_d3e094cec8072d669cc5079ebb732c27d5032c25f7c8db3d41cb44642bbffe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d3e094cec8072d669cc5079ebb732c27d5032c25f7c8db3d41cb44642bbffe88->leave($__internal_d3e094cec8072d669cc5079ebb732c27d5032c25f7c8db3d41cb44642bbffe88_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

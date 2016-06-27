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
        $__internal_e98b20dbbb476861a64d7ec558fdb9cee46840099181cabf7df35d1a1b8e8889 = $this->env->getExtension("native_profiler");
        $__internal_e98b20dbbb476861a64d7ec558fdb9cee46840099181cabf7df35d1a1b8e8889->enter($__internal_e98b20dbbb476861a64d7ec558fdb9cee46840099181cabf7df35d1a1b8e8889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e98b20dbbb476861a64d7ec558fdb9cee46840099181cabf7df35d1a1b8e8889->leave($__internal_e98b20dbbb476861a64d7ec558fdb9cee46840099181cabf7df35d1a1b8e8889_prof);

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

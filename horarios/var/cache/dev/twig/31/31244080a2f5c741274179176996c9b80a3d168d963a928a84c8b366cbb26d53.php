<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3f392131221adef39b2e031b34646eebc3cc5435b19350f918da808765ea7e8c extends Twig_Template
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
        $__internal_d27277e3c0f4a853c9e6ea9cba993598328e9dad8eb3393752dac1b716126dac = $this->env->getExtension("native_profiler");
        $__internal_d27277e3c0f4a853c9e6ea9cba993598328e9dad8eb3393752dac1b716126dac->enter($__internal_d27277e3c0f4a853c9e6ea9cba993598328e9dad8eb3393752dac1b716126dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d27277e3c0f4a853c9e6ea9cba993598328e9dad8eb3393752dac1b716126dac->leave($__internal_d27277e3c0f4a853c9e6ea9cba993598328e9dad8eb3393752dac1b716126dac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

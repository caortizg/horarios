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
        $__internal_0345c15691d9ddb3f553c65ce7f6fa1d14d97dff90b41474e447e551ef5a28f6 = $this->env->getExtension("native_profiler");
        $__internal_0345c15691d9ddb3f553c65ce7f6fa1d14d97dff90b41474e447e551ef5a28f6->enter($__internal_0345c15691d9ddb3f553c65ce7f6fa1d14d97dff90b41474e447e551ef5a28f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0345c15691d9ddb3f553c65ce7f6fa1d14d97dff90b41474e447e551ef5a28f6->leave($__internal_0345c15691d9ddb3f553c65ce7f6fa1d14d97dff90b41474e447e551ef5a28f6_prof);

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

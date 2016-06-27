<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8e4bdcb57f4f863ef40432fd6f47d45d8ce58b1248137ed81e8657c47e6095d5 extends Twig_Template
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
        $__internal_eddf03dcb587695d88598cc211a8e2a297c779b601ec886422fb89931883873d = $this->env->getExtension("native_profiler");
        $__internal_eddf03dcb587695d88598cc211a8e2a297c779b601ec886422fb89931883873d->enter($__internal_eddf03dcb587695d88598cc211a8e2a297c779b601ec886422fb89931883873d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_eddf03dcb587695d88598cc211a8e2a297c779b601ec886422fb89931883873d->leave($__internal_eddf03dcb587695d88598cc211a8e2a297c779b601ec886422fb89931883873d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

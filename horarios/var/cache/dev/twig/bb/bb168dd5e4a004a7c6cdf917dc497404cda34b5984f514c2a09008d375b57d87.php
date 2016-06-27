<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_17b08ec33d89b2dd3cf1d39a3d8a35f21afa67c5a15c6dc153644006ec7bbb2a extends Twig_Template
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
        $__internal_eafd1b49d79d45bb6b39bd420711bf077301db691f71e0621d00d55586e3d485 = $this->env->getExtension("native_profiler");
        $__internal_eafd1b49d79d45bb6b39bd420711bf077301db691f71e0621d00d55586e3d485->enter($__internal_eafd1b49d79d45bb6b39bd420711bf077301db691f71e0621d00d55586e3d485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_eafd1b49d79d45bb6b39bd420711bf077301db691f71e0621d00d55586e3d485->leave($__internal_eafd1b49d79d45bb6b39bd420711bf077301db691f71e0621d00d55586e3d485_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

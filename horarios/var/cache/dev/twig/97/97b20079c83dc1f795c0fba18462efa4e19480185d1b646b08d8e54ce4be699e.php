<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e90c0e3a536483e002054a6408986946cd7e0671c829f789ca041428944f1606 extends Twig_Template
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
        $__internal_cc28dee1af9fc792f2d8684528b384a263246d5ce37a55c08eb62a477704568d = $this->env->getExtension("native_profiler");
        $__internal_cc28dee1af9fc792f2d8684528b384a263246d5ce37a55c08eb62a477704568d->enter($__internal_cc28dee1af9fc792f2d8684528b384a263246d5ce37a55c08eb62a477704568d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cc28dee1af9fc792f2d8684528b384a263246d5ce37a55c08eb62a477704568d->leave($__internal_cc28dee1af9fc792f2d8684528b384a263246d5ce37a55c08eb62a477704568d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

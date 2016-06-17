<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9a6c6f22e6b35d9d57b418c805f61b63736ca63a103aa439785e2f538d440d07 extends Twig_Template
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
        $__internal_80c9baf8e7133f07c34b4f283342062b7220b9fdba2cca24a05fb35fb7043eeb = $this->env->getExtension("native_profiler");
        $__internal_80c9baf8e7133f07c34b4f283342062b7220b9fdba2cca24a05fb35fb7043eeb->enter($__internal_80c9baf8e7133f07c34b4f283342062b7220b9fdba2cca24a05fb35fb7043eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_80c9baf8e7133f07c34b4f283342062b7220b9fdba2cca24a05fb35fb7043eeb->leave($__internal_80c9baf8e7133f07c34b4f283342062b7220b9fdba2cca24a05fb35fb7043eeb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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

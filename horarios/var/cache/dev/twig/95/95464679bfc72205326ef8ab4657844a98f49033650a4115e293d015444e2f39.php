<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_6372857564e3aa058978061c4c8571f228032f5f82ead89f46284d822eb14d8e extends Twig_Template
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
        $__internal_8f7d1ac3eb55c3383244baef6dad4afb228e811e5e72783c93e79d529c4aa918 = $this->env->getExtension("native_profiler");
        $__internal_8f7d1ac3eb55c3383244baef6dad4afb228e811e5e72783c93e79d529c4aa918->enter($__internal_8f7d1ac3eb55c3383244baef6dad4afb228e811e5e72783c93e79d529c4aa918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8f7d1ac3eb55c3383244baef6dad4afb228e811e5e72783c93e79d529c4aa918->leave($__internal_8f7d1ac3eb55c3383244baef6dad4afb228e811e5e72783c93e79d529c4aa918_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

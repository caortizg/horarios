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
        $__internal_c389b42c621751fe4365d341cf6f0fdcb03075488870cead28a2ec4b38a73e95 = $this->env->getExtension("native_profiler");
        $__internal_c389b42c621751fe4365d341cf6f0fdcb03075488870cead28a2ec4b38a73e95->enter($__internal_c389b42c621751fe4365d341cf6f0fdcb03075488870cead28a2ec4b38a73e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c389b42c621751fe4365d341cf6f0fdcb03075488870cead28a2ec4b38a73e95->leave($__internal_c389b42c621751fe4365d341cf6f0fdcb03075488870cead28a2ec4b38a73e95_prof);

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

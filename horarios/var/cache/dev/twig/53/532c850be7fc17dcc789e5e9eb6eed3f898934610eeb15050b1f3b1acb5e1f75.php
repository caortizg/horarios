<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2045ec784381ffdd8579b530141d2aae45e0573bc91a9f2558d8532805fe5b9f extends Twig_Template
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
        $__internal_e0df2de306b11e37893401f9d8788e777aee4e89856b9ab46bf209c096c84175 = $this->env->getExtension("native_profiler");
        $__internal_e0df2de306b11e37893401f9d8788e777aee4e89856b9ab46bf209c096c84175->enter($__internal_e0df2de306b11e37893401f9d8788e777aee4e89856b9ab46bf209c096c84175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e0df2de306b11e37893401f9d8788e777aee4e89856b9ab46bf209c096c84175->leave($__internal_e0df2de306b11e37893401f9d8788e777aee4e89856b9ab46bf209c096c84175_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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

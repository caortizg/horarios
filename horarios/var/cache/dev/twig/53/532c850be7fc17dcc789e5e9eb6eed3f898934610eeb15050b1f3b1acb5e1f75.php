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
        $__internal_ea9d2cf00d75dddf849e0ec9217434a0f9776bf55518facab3a755078c6995f4 = $this->env->getExtension("native_profiler");
        $__internal_ea9d2cf00d75dddf849e0ec9217434a0f9776bf55518facab3a755078c6995f4->enter($__internal_ea9d2cf00d75dddf849e0ec9217434a0f9776bf55518facab3a755078c6995f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ea9d2cf00d75dddf849e0ec9217434a0f9776bf55518facab3a755078c6995f4->leave($__internal_ea9d2cf00d75dddf849e0ec9217434a0f9776bf55518facab3a755078c6995f4_prof);

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

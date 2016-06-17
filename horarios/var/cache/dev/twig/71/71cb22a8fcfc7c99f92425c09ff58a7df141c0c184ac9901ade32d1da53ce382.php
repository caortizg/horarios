<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6c3671751b507ceb866049954e74dc424d15878e29fe4ebe5a95a06fca35a0f5 extends Twig_Template
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
        $__internal_94411c94decbbf62fe4fd0a648b2f56081d4aff85e51920a97fe59e58d21d6dc = $this->env->getExtension("native_profiler");
        $__internal_94411c94decbbf62fe4fd0a648b2f56081d4aff85e51920a97fe59e58d21d6dc->enter($__internal_94411c94decbbf62fe4fd0a648b2f56081d4aff85e51920a97fe59e58d21d6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_94411c94decbbf62fe4fd0a648b2f56081d4aff85e51920a97fe59e58d21d6dc->leave($__internal_94411c94decbbf62fe4fd0a648b2f56081d4aff85e51920a97fe59e58d21d6dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

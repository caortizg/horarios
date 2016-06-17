<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_51a86a464ad77d65e145d0409551253d8002ec271f5863be42cfcc4b6bec7cb0 extends Twig_Template
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
        $__internal_61f97d4a87dcd4c475c964ca392885c53ca8829c666ff61d7ac8167d06c0133b = $this->env->getExtension("native_profiler");
        $__internal_61f97d4a87dcd4c475c964ca392885c53ca8829c666ff61d7ac8167d06c0133b->enter($__internal_61f97d4a87dcd4c475c964ca392885c53ca8829c666ff61d7ac8167d06c0133b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_61f97d4a87dcd4c475c964ca392885c53ca8829c666ff61d7ac8167d06c0133b->leave($__internal_61f97d4a87dcd4c475c964ca392885c53ca8829c666ff61d7ac8167d06c0133b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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

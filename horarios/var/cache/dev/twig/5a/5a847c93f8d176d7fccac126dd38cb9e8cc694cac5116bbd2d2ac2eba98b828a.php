<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ceba98ad3add25c420b025ab9e4c35f2f160893124679827f68d608aad7a6290 extends Twig_Template
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
        $__internal_884f7ddad958274727cc1b9af1ef6f7b2d6d58f0cacc4bd675baada35c12aeb7 = $this->env->getExtension("native_profiler");
        $__internal_884f7ddad958274727cc1b9af1ef6f7b2d6d58f0cacc4bd675baada35c12aeb7->enter($__internal_884f7ddad958274727cc1b9af1ef6f7b2d6d58f0cacc4bd675baada35c12aeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_884f7ddad958274727cc1b9af1ef6f7b2d6d58f0cacc4bd675baada35c12aeb7->leave($__internal_884f7ddad958274727cc1b9af1ef6f7b2d6d58f0cacc4bd675baada35c12aeb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
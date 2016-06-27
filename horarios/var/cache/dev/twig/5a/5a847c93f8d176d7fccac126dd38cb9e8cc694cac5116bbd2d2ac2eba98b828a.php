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
        $__internal_dd265e78d05fd75823e564099a81af625bb802335b4d421d8103a50c390f921d = $this->env->getExtension("native_profiler");
        $__internal_dd265e78d05fd75823e564099a81af625bb802335b4d421d8103a50c390f921d->enter($__internal_dd265e78d05fd75823e564099a81af625bb802335b4d421d8103a50c390f921d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_dd265e78d05fd75823e564099a81af625bb802335b4d421d8103a50c390f921d->leave($__internal_dd265e78d05fd75823e564099a81af625bb802335b4d421d8103a50c390f921d_prof);

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

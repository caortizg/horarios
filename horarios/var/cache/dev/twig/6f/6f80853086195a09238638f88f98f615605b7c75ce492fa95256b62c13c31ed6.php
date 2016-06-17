<?php

/* @CaogHorarios/Default/index.html.twig */
class __TwigTemplate_6e75ee56e3fcfc3cd08713eb292fefd26b12d13e35c8ccbeb642c0aa2a6d1219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "@CaogHorarios/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a78d56e52fc6c4be876a0a3c2577e93f21896d64353b8af90870626aae9bfe0 = $this->env->getExtension("native_profiler");
        $__internal_6a78d56e52fc6c4be876a0a3c2577e93f21896d64353b8af90870626aae9bfe0->enter($__internal_6a78d56e52fc6c4be876a0a3c2577e93f21896d64353b8af90870626aae9bfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a78d56e52fc6c4be876a0a3c2577e93f21896d64353b8af90870626aae9bfe0->leave($__internal_6a78d56e52fc6c4be876a0a3c2577e93f21896d64353b8af90870626aae9bfe0_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* */
/* */

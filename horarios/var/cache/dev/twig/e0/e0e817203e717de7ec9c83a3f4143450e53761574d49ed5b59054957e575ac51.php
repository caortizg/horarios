<?php

/* CaogHorariosBundle:Default:index.html.twig */
class __TwigTemplate_66189ae9649df470e04d8dbe85c9ddd079036679a5025a3e1582be011048c5fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "CaogHorariosBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_600ba889337ec982a67c39cd22ba7f44aa0a36b45de91f538c247c443e893e9d = $this->env->getExtension("native_profiler");
        $__internal_600ba889337ec982a67c39cd22ba7f44aa0a36b45de91f538c247c443e893e9d->enter($__internal_600ba889337ec982a67c39cd22ba7f44aa0a36b45de91f538c247c443e893e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600ba889337ec982a67c39cd22ba7f44aa0a36b45de91f538c247c443e893e9d->leave($__internal_600ba889337ec982a67c39cd22ba7f44aa0a36b45de91f538c247c443e893e9d_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:Default:index.html.twig";
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

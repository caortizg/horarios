<?php

/* CaogHorariosBundle:Default:index.html.twig */
class __TwigTemplate_ce4cb121486a467429422e9a89d184f9e05dc26bf8012fbb33626b6b768cb6e3 extends Twig_Template
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
        $__internal_28ef9e8a6cb3f9dccdeda60833707562dea75bad6b8369bc8786e532c8d58f8b = $this->env->getExtension("native_profiler");
        $__internal_28ef9e8a6cb3f9dccdeda60833707562dea75bad6b8369bc8786e532c8d58f8b->enter($__internal_28ef9e8a6cb3f9dccdeda60833707562dea75bad6b8369bc8786e532c8d58f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ef9e8a6cb3f9dccdeda60833707562dea75bad6b8369bc8786e532c8d58f8b->leave($__internal_28ef9e8a6cb3f9dccdeda60833707562dea75bad6b8369bc8786e532c8d58f8b_prof);

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

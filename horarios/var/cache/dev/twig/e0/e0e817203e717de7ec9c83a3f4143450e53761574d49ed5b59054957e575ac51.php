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
        $__internal_5180cc70a8c0ffa4bd0ebc4eedfa844823585c54f3b90d1e83b047abd410f5bb = $this->env->getExtension("native_profiler");
        $__internal_5180cc70a8c0ffa4bd0ebc4eedfa844823585c54f3b90d1e83b047abd410f5bb->enter($__internal_5180cc70a8c0ffa4bd0ebc4eedfa844823585c54f3b90d1e83b047abd410f5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5180cc70a8c0ffa4bd0ebc4eedfa844823585c54f3b90d1e83b047abd410f5bb->leave($__internal_5180cc70a8c0ffa4bd0ebc4eedfa844823585c54f3b90d1e83b047abd410f5bb_prof);

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

<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5ea78ba02bc9ab0e24d5744675a51654bc331d4c858b9f41ab2b0c49dbf689df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1dca8ded0557a586ca5d71dd0f7229cc7802ba6cf3f8190923165b354616c0b6 = $this->env->getExtension("native_profiler");
        $__internal_1dca8ded0557a586ca5d71dd0f7229cc7802ba6cf3f8190923165b354616c0b6->enter($__internal_1dca8ded0557a586ca5d71dd0f7229cc7802ba6cf3f8190923165b354616c0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1dca8ded0557a586ca5d71dd0f7229cc7802ba6cf3f8190923165b354616c0b6->leave($__internal_1dca8ded0557a586ca5d71dd0f7229cc7802ba6cf3f8190923165b354616c0b6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b3faca15fa8dc876a514b847c4f6d8fd5ad16184253461d4c8cc5bdd4b6776a = $this->env->getExtension("native_profiler");
        $__internal_2b3faca15fa8dc876a514b847c4f6d8fd5ad16184253461d4c8cc5bdd4b6776a->enter($__internal_2b3faca15fa8dc876a514b847c4f6d8fd5ad16184253461d4c8cc5bdd4b6776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2b3faca15fa8dc876a514b847c4f6d8fd5ad16184253461d4c8cc5bdd4b6776a->leave($__internal_2b3faca15fa8dc876a514b847c4f6d8fd5ad16184253461d4c8cc5bdd4b6776a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

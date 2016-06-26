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
        $__internal_e289ae19876850eeddeff14dc1e5352c59d070a9e9e9c7296147dc6a1b2c32e4 = $this->env->getExtension("native_profiler");
        $__internal_e289ae19876850eeddeff14dc1e5352c59d070a9e9e9c7296147dc6a1b2c32e4->enter($__internal_e289ae19876850eeddeff14dc1e5352c59d070a9e9e9c7296147dc6a1b2c32e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e289ae19876850eeddeff14dc1e5352c59d070a9e9e9c7296147dc6a1b2c32e4->leave($__internal_e289ae19876850eeddeff14dc1e5352c59d070a9e9e9c7296147dc6a1b2c32e4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_da6cb650a69957b16bae0fef901a1a004f3420f32cb11e1a05711cf40ddac1c3 = $this->env->getExtension("native_profiler");
        $__internal_da6cb650a69957b16bae0fef901a1a004f3420f32cb11e1a05711cf40ddac1c3->enter($__internal_da6cb650a69957b16bae0fef901a1a004f3420f32cb11e1a05711cf40ddac1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_da6cb650a69957b16bae0fef901a1a004f3420f32cb11e1a05711cf40ddac1c3->leave($__internal_da6cb650a69957b16bae0fef901a1a004f3420f32cb11e1a05711cf40ddac1c3_prof);

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

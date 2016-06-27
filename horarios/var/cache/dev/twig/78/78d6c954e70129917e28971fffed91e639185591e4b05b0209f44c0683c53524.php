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
        $__internal_1a262e87f1695766bb3f57710dc88c959075c607006af5b2967891a0406479ea = $this->env->getExtension("native_profiler");
        $__internal_1a262e87f1695766bb3f57710dc88c959075c607006af5b2967891a0406479ea->enter($__internal_1a262e87f1695766bb3f57710dc88c959075c607006af5b2967891a0406479ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1a262e87f1695766bb3f57710dc88c959075c607006af5b2967891a0406479ea->leave($__internal_1a262e87f1695766bb3f57710dc88c959075c607006af5b2967891a0406479ea_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_491892e56c8ec1ec0040023b6f9c3703b725c84ce895fc4f5141bd985a6e0b55 = $this->env->getExtension("native_profiler");
        $__internal_491892e56c8ec1ec0040023b6f9c3703b725c84ce895fc4f5141bd985a6e0b55->enter($__internal_491892e56c8ec1ec0040023b6f9c3703b725c84ce895fc4f5141bd985a6e0b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_491892e56c8ec1ec0040023b6f9c3703b725c84ce895fc4f5141bd985a6e0b55->leave($__internal_491892e56c8ec1ec0040023b6f9c3703b725c84ce895fc4f5141bd985a6e0b55_prof);

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

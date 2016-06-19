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
        $__internal_e6abb84d0fb48cca3a09e590ecd72e865b0361ca634cda23af6c093845d4487d = $this->env->getExtension("native_profiler");
        $__internal_e6abb84d0fb48cca3a09e590ecd72e865b0361ca634cda23af6c093845d4487d->enter($__internal_e6abb84d0fb48cca3a09e590ecd72e865b0361ca634cda23af6c093845d4487d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e6abb84d0fb48cca3a09e590ecd72e865b0361ca634cda23af6c093845d4487d->leave($__internal_e6abb84d0fb48cca3a09e590ecd72e865b0361ca634cda23af6c093845d4487d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33c30a08cf37051b657cd9ad68c3633c06d4d0cbd8dd9a3291697d99bfe3d7c9 = $this->env->getExtension("native_profiler");
        $__internal_33c30a08cf37051b657cd9ad68c3633c06d4d0cbd8dd9a3291697d99bfe3d7c9->enter($__internal_33c30a08cf37051b657cd9ad68c3633c06d4d0cbd8dd9a3291697d99bfe3d7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33c30a08cf37051b657cd9ad68c3633c06d4d0cbd8dd9a3291697d99bfe3d7c9->leave($__internal_33c30a08cf37051b657cd9ad68c3633c06d4d0cbd8dd9a3291697d99bfe3d7c9_prof);

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

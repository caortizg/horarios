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
        $__internal_0a7dcbcc72acabef14737d9efebd50a5bb50ebf5f86db518f44b3d8bd23a78a4 = $this->env->getExtension("native_profiler");
        $__internal_0a7dcbcc72acabef14737d9efebd50a5bb50ebf5f86db518f44b3d8bd23a78a4->enter($__internal_0a7dcbcc72acabef14737d9efebd50a5bb50ebf5f86db518f44b3d8bd23a78a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0a7dcbcc72acabef14737d9efebd50a5bb50ebf5f86db518f44b3d8bd23a78a4->leave($__internal_0a7dcbcc72acabef14737d9efebd50a5bb50ebf5f86db518f44b3d8bd23a78a4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7dfa819f56eee61a3fcf44a7ccbd1de2ccb1baacec9ce60a2728cdce6ba46d06 = $this->env->getExtension("native_profiler");
        $__internal_7dfa819f56eee61a3fcf44a7ccbd1de2ccb1baacec9ce60a2728cdce6ba46d06->enter($__internal_7dfa819f56eee61a3fcf44a7ccbd1de2ccb1baacec9ce60a2728cdce6ba46d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7dfa819f56eee61a3fcf44a7ccbd1de2ccb1baacec9ce60a2728cdce6ba46d06->leave($__internal_7dfa819f56eee61a3fcf44a7ccbd1de2ccb1baacec9ce60a2728cdce6ba46d06_prof);

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

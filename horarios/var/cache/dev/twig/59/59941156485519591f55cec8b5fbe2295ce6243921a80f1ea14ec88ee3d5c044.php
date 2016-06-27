<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f50734b817fa3f8b62fbff50da253015189f4583ae3d21013a5b573bcc0fad54 extends Twig_Template
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
        $__internal_7542d5f6488194669f721f16605f811159d4c2ebcc198b634ac3736c36db3641 = $this->env->getExtension("native_profiler");
        $__internal_7542d5f6488194669f721f16605f811159d4c2ebcc198b634ac3736c36db3641->enter($__internal_7542d5f6488194669f721f16605f811159d4c2ebcc198b634ac3736c36db3641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7542d5f6488194669f721f16605f811159d4c2ebcc198b634ac3736c36db3641->leave($__internal_7542d5f6488194669f721f16605f811159d4c2ebcc198b634ac3736c36db3641_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3233adc18b5ca1ec0ce7653aadb6df7858350015491f1618a8e778bdd97ff80 = $this->env->getExtension("native_profiler");
        $__internal_d3233adc18b5ca1ec0ce7653aadb6df7858350015491f1618a8e778bdd97ff80->enter($__internal_d3233adc18b5ca1ec0ce7653aadb6df7858350015491f1618a8e778bdd97ff80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d3233adc18b5ca1ec0ce7653aadb6df7858350015491f1618a8e778bdd97ff80->leave($__internal_d3233adc18b5ca1ec0ce7653aadb6df7858350015491f1618a8e778bdd97ff80_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

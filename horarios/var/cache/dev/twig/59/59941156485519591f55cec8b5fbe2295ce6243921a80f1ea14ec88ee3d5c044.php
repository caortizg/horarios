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
        $__internal_11d4356b16393a729447ae410036bb247658cb796c6a4304dfdb33591baab965 = $this->env->getExtension("native_profiler");
        $__internal_11d4356b16393a729447ae410036bb247658cb796c6a4304dfdb33591baab965->enter($__internal_11d4356b16393a729447ae410036bb247658cb796c6a4304dfdb33591baab965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_11d4356b16393a729447ae410036bb247658cb796c6a4304dfdb33591baab965->leave($__internal_11d4356b16393a729447ae410036bb247658cb796c6a4304dfdb33591baab965_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a24d6a309965de6dcd21dc5fe50c7b367a851bdb677581512b98a4b325f77be = $this->env->getExtension("native_profiler");
        $__internal_7a24d6a309965de6dcd21dc5fe50c7b367a851bdb677581512b98a4b325f77be->enter($__internal_7a24d6a309965de6dcd21dc5fe50c7b367a851bdb677581512b98a4b325f77be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7a24d6a309965de6dcd21dc5fe50c7b367a851bdb677581512b98a4b325f77be->leave($__internal_7a24d6a309965de6dcd21dc5fe50c7b367a851bdb677581512b98a4b325f77be_prof);

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

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
        $__internal_7b0d1697889429f1dae3f62f5f0ba524276bc0f5de14073866ac62a52debdab2 = $this->env->getExtension("native_profiler");
        $__internal_7b0d1697889429f1dae3f62f5f0ba524276bc0f5de14073866ac62a52debdab2->enter($__internal_7b0d1697889429f1dae3f62f5f0ba524276bc0f5de14073866ac62a52debdab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7b0d1697889429f1dae3f62f5f0ba524276bc0f5de14073866ac62a52debdab2->leave($__internal_7b0d1697889429f1dae3f62f5f0ba524276bc0f5de14073866ac62a52debdab2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a367e22b7127f4f5887ea9972c487e57606ef5a75b59908f4f9a6c0b76f48542 = $this->env->getExtension("native_profiler");
        $__internal_a367e22b7127f4f5887ea9972c487e57606ef5a75b59908f4f9a6c0b76f48542->enter($__internal_a367e22b7127f4f5887ea9972c487e57606ef5a75b59908f4f9a6c0b76f48542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a367e22b7127f4f5887ea9972c487e57606ef5a75b59908f4f9a6c0b76f48542->leave($__internal_a367e22b7127f4f5887ea9972c487e57606ef5a75b59908f4f9a6c0b76f48542_prof);

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

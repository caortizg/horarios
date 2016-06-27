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
        $__internal_5deb00dde0571a10b3013cc85ce9476edc984b8f3c8bfddf213888622a34c685 = $this->env->getExtension("native_profiler");
        $__internal_5deb00dde0571a10b3013cc85ce9476edc984b8f3c8bfddf213888622a34c685->enter($__internal_5deb00dde0571a10b3013cc85ce9476edc984b8f3c8bfddf213888622a34c685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5deb00dde0571a10b3013cc85ce9476edc984b8f3c8bfddf213888622a34c685->leave($__internal_5deb00dde0571a10b3013cc85ce9476edc984b8f3c8bfddf213888622a34c685_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_86225289793a0d89b2cb25d2e2db80ffe6e9db1c1d3feabeb087d46efaab8315 = $this->env->getExtension("native_profiler");
        $__internal_86225289793a0d89b2cb25d2e2db80ffe6e9db1c1d3feabeb087d46efaab8315->enter($__internal_86225289793a0d89b2cb25d2e2db80ffe6e9db1c1d3feabeb087d46efaab8315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_86225289793a0d89b2cb25d2e2db80ffe6e9db1c1d3feabeb087d46efaab8315->leave($__internal_86225289793a0d89b2cb25d2e2db80ffe6e9db1c1d3feabeb087d46efaab8315_prof);

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

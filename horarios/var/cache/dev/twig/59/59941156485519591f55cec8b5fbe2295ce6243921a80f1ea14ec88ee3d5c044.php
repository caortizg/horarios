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
        $__internal_0d39ba40820f6b1a1f7c7654ce0a9a222bdc461aa27a3fb087569f123cc982d3 = $this->env->getExtension("native_profiler");
        $__internal_0d39ba40820f6b1a1f7c7654ce0a9a222bdc461aa27a3fb087569f123cc982d3->enter($__internal_0d39ba40820f6b1a1f7c7654ce0a9a222bdc461aa27a3fb087569f123cc982d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0d39ba40820f6b1a1f7c7654ce0a9a222bdc461aa27a3fb087569f123cc982d3->leave($__internal_0d39ba40820f6b1a1f7c7654ce0a9a222bdc461aa27a3fb087569f123cc982d3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_177804eaed3460701485edea42a444333b72f3707c3f1693caca68bb948c210d = $this->env->getExtension("native_profiler");
        $__internal_177804eaed3460701485edea42a444333b72f3707c3f1693caca68bb948c210d->enter($__internal_177804eaed3460701485edea42a444333b72f3707c3f1693caca68bb948c210d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_177804eaed3460701485edea42a444333b72f3707c3f1693caca68bb948c210d->leave($__internal_177804eaed3460701485edea42a444333b72f3707c3f1693caca68bb948c210d_prof);

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

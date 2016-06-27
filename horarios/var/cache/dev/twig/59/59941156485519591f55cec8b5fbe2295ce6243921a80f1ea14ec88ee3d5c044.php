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
        $__internal_0b8d9b43dbe98118d70f804c89b96e480b4056f69b83a1225cfd7f73761716c6 = $this->env->getExtension("native_profiler");
        $__internal_0b8d9b43dbe98118d70f804c89b96e480b4056f69b83a1225cfd7f73761716c6->enter($__internal_0b8d9b43dbe98118d70f804c89b96e480b4056f69b83a1225cfd7f73761716c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0b8d9b43dbe98118d70f804c89b96e480b4056f69b83a1225cfd7f73761716c6->leave($__internal_0b8d9b43dbe98118d70f804c89b96e480b4056f69b83a1225cfd7f73761716c6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4a6b6b01536c39ca4f4aa536f86b1a51e6ab30310bb5b0b0f5deefca675d57b = $this->env->getExtension("native_profiler");
        $__internal_b4a6b6b01536c39ca4f4aa536f86b1a51e6ab30310bb5b0b0f5deefca675d57b->enter($__internal_b4a6b6b01536c39ca4f4aa536f86b1a51e6ab30310bb5b0b0f5deefca675d57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b4a6b6b01536c39ca4f4aa536f86b1a51e6ab30310bb5b0b0f5deefca675d57b->leave($__internal_b4a6b6b01536c39ca4f4aa536f86b1a51e6ab30310bb5b0b0f5deefca675d57b_prof);

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

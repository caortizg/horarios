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
        $__internal_672e431b2b2ef072a1a79df003bc5f5a009750ec6bdd0ff4bd68badf46d8db88 = $this->env->getExtension("native_profiler");
        $__internal_672e431b2b2ef072a1a79df003bc5f5a009750ec6bdd0ff4bd68badf46d8db88->enter($__internal_672e431b2b2ef072a1a79df003bc5f5a009750ec6bdd0ff4bd68badf46d8db88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_672e431b2b2ef072a1a79df003bc5f5a009750ec6bdd0ff4bd68badf46d8db88->leave($__internal_672e431b2b2ef072a1a79df003bc5f5a009750ec6bdd0ff4bd68badf46d8db88_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa9c9b86c7fd172ada066dc8d8b3993d29f6648586a01f06ca663dab7c219415 = $this->env->getExtension("native_profiler");
        $__internal_aa9c9b86c7fd172ada066dc8d8b3993d29f6648586a01f06ca663dab7c219415->enter($__internal_aa9c9b86c7fd172ada066dc8d8b3993d29f6648586a01f06ca663dab7c219415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_aa9c9b86c7fd172ada066dc8d8b3993d29f6648586a01f06ca663dab7c219415->leave($__internal_aa9c9b86c7fd172ada066dc8d8b3993d29f6648586a01f06ca663dab7c219415_prof);

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

<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_687b009a023c220c5fdf3b7f2da31323431b262479504642c163c95e70a9624a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42016f70c25cdc3247276090129ced10be76564d8ebfce4a91d189d34c827ed5 = $this->env->getExtension("native_profiler");
        $__internal_42016f70c25cdc3247276090129ced10be76564d8ebfce4a91d189d34c827ed5->enter($__internal_42016f70c25cdc3247276090129ced10be76564d8ebfce4a91d189d34c827ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_42016f70c25cdc3247276090129ced10be76564d8ebfce4a91d189d34c827ed5->leave($__internal_42016f70c25cdc3247276090129ced10be76564d8ebfce4a91d189d34c827ed5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

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
        $__internal_b1cf7c219e4aaef7ffc9180e39b6bcab75ecfb8fc60dabcb7f92d9e0587767c4 = $this->env->getExtension("native_profiler");
        $__internal_b1cf7c219e4aaef7ffc9180e39b6bcab75ecfb8fc60dabcb7f92d9e0587767c4->enter($__internal_b1cf7c219e4aaef7ffc9180e39b6bcab75ecfb8fc60dabcb7f92d9e0587767c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b1cf7c219e4aaef7ffc9180e39b6bcab75ecfb8fc60dabcb7f92d9e0587767c4->leave($__internal_b1cf7c219e4aaef7ffc9180e39b6bcab75ecfb8fc60dabcb7f92d9e0587767c4_prof);

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

<?php

/* @CaogHorarios/Default/index.html.twig */
class __TwigTemplate_6e75ee56e3fcfc3cd08713eb292fefd26b12d13e35c8ccbeb642c0aa2a6d1219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "@CaogHorarios/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1fc3d7fc1824e33b4a04fdf85a7eafcad0017de28354cd32e834baa2c77e64e = $this->env->getExtension("native_profiler");
        $__internal_d1fc3d7fc1824e33b4a04fdf85a7eafcad0017de28354cd32e834baa2c77e64e->enter($__internal_d1fc3d7fc1824e33b4a04fdf85a7eafcad0017de28354cd32e834baa2c77e64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1fc3d7fc1824e33b4a04fdf85a7eafcad0017de28354cd32e834baa2c77e64e->leave($__internal_d1fc3d7fc1824e33b4a04fdf85a7eafcad0017de28354cd32e834baa2c77e64e_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* */
/* */

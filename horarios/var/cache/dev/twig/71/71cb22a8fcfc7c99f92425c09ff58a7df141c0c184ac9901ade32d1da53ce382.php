<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6c3671751b507ceb866049954e74dc424d15878e29fe4ebe5a95a06fca35a0f5 extends Twig_Template
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
        $__internal_c804520aaa81a468b85807800ddf5e26e83c696bc0c2188f4590e54cda98dbc3 = $this->env->getExtension("native_profiler");
        $__internal_c804520aaa81a468b85807800ddf5e26e83c696bc0c2188f4590e54cda98dbc3->enter($__internal_c804520aaa81a468b85807800ddf5e26e83c696bc0c2188f4590e54cda98dbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c804520aaa81a468b85807800ddf5e26e83c696bc0c2188f4590e54cda98dbc3->leave($__internal_c804520aaa81a468b85807800ddf5e26e83c696bc0c2188f4590e54cda98dbc3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

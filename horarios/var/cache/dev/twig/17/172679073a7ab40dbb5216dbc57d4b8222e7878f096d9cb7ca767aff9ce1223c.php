<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_da55b21f6879900e464cc58c9061b37040a4b05eb30eb3f37a7bddbb271a8a24 extends Twig_Template
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
        $__internal_61ad9e1cc24c4d6be64afb665df81f139408ecfab2b3337de7daa1fe1703b68d = $this->env->getExtension("native_profiler");
        $__internal_61ad9e1cc24c4d6be64afb665df81f139408ecfab2b3337de7daa1fe1703b68d->enter($__internal_61ad9e1cc24c4d6be64afb665df81f139408ecfab2b3337de7daa1fe1703b68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_61ad9e1cc24c4d6be64afb665df81f139408ecfab2b3337de7daa1fe1703b68d->leave($__internal_61ad9e1cc24c4d6be64afb665df81f139408ecfab2b3337de7daa1fe1703b68d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7d677fb517f95115ec1ebd36b76da0f82f86f1c630a844facdac7e70bde18793 extends Twig_Template
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
        $__internal_db555beed460b839683d64833d2e7e41373ac89ee58b1b845328e05f245e7846 = $this->env->getExtension("native_profiler");
        $__internal_db555beed460b839683d64833d2e7e41373ac89ee58b1b845328e05f245e7846->enter($__internal_db555beed460b839683d64833d2e7e41373ac89ee58b1b845328e05f245e7846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_db555beed460b839683d64833d2e7e41373ac89ee58b1b845328e05f245e7846->leave($__internal_db555beed460b839683d64833d2e7e41373ac89ee58b1b845328e05f245e7846_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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

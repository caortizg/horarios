<?php

/* CaogHorariosBundle:User:fields.html.twig */
class __TwigTemplate_056a5d67ef6c1553711312e0ed1c24e3a11b95b68cffa4b48bfb018b6ae02ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b36f97cb3429de99b34721e0d358358ac690f18256bcc169739437913b8e2db = $this->env->getExtension("native_profiler");
        $__internal_6b36f97cb3429de99b34721e0d358358ac690f18256bcc169739437913b8e2db->enter($__internal_6b36f97cb3429de99b34721e0d358358ac690f18256bcc169739437913b8e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:fields.html.twig"));

        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_6b36f97cb3429de99b34721e0d358358ac690f18256bcc169739437913b8e2db->leave($__internal_6b36f97cb3429de99b34721e0d358358ac690f18256bcc169739437913b8e2db_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2f86fd3588a17f3976cb4df9bf9b3bc21a680300150d95854053522c8e050805 = $this->env->getExtension("native_profiler");
        $__internal_2f86fd3588a17f3976cb4df9bf9b3bc21a680300150d95854053522c8e050805->enter($__internal_2f86fd3588a17f3976cb4df9bf9b3bc21a680300150d95854053522c8e050805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 2
        echo "\t";
        ob_start();
        // line 3
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 4
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t<ul>
\t\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 7
                echo "\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t\t\t</ul>
\t\t</div>
\t\t";
        }
        // line 12
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2f86fd3588a17f3976cb4df9bf9b3bc21a680300150d95854053522c8e050805->leave($__internal_2f86fd3588a17f3976cb4df9bf9b3bc21a680300150d95854053522c8e050805_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:User:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  58 => 9,  49 => 7,  45 => 6,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block form_errors %}*/
/* 	{% spaceless %}*/
/* 		{% if errors|length > 0 %}*/
/* 		<div class="alert alert-danger">*/
/* 			<ul>*/
/* 				{% for error in errors %}*/
/* 					<li>{{ error.message }}</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 	{% endspaceless %}*/
/* {% endblock form_errors %}*/

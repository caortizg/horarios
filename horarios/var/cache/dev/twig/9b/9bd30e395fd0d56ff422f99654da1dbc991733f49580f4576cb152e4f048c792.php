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
        $__internal_0c903ce83261d2351ab1c57884da92598c79ef0e5d466256da21c585226babdd = $this->env->getExtension("native_profiler");
        $__internal_0c903ce83261d2351ab1c57884da92598c79ef0e5d466256da21c585226babdd->enter($__internal_0c903ce83261d2351ab1c57884da92598c79ef0e5d466256da21c585226babdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:fields.html.twig"));

        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_0c903ce83261d2351ab1c57884da92598c79ef0e5d466256da21c585226babdd->leave($__internal_0c903ce83261d2351ab1c57884da92598c79ef0e5d466256da21c585226babdd_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a02ed4ed5be7dba9671c529d7564d5d1b0138f67ad1f136fa94c67e611755be1 = $this->env->getExtension("native_profiler");
        $__internal_a02ed4ed5be7dba9671c529d7564d5d1b0138f67ad1f136fa94c67e611755be1->enter($__internal_a02ed4ed5be7dba9671c529d7564d5d1b0138f67ad1f136fa94c67e611755be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_a02ed4ed5be7dba9671c529d7564d5d1b0138f67ad1f136fa94c67e611755be1->leave($__internal_a02ed4ed5be7dba9671c529d7564d5d1b0138f67ad1f136fa94c67e611755be1_prof);

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

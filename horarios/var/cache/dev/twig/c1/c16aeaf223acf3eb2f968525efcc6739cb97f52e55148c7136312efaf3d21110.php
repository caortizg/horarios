<?php

/* @CaogHorarios/User/fields.html.twig */
class __TwigTemplate_2995a33f6fe34084a74d4581cf5e83dbbaca2e3a27feaf478e72c84758fcce7c extends Twig_Template
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
        $__internal_a1523a7f2d93589e921d19160dfdb42bc8f4234105a04872c45b07f633811d14 = $this->env->getExtension("native_profiler");
        $__internal_a1523a7f2d93589e921d19160dfdb42bc8f4234105a04872c45b07f633811d14->enter($__internal_a1523a7f2d93589e921d19160dfdb42bc8f4234105a04872c45b07f633811d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/User/fields.html.twig"));

        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a1523a7f2d93589e921d19160dfdb42bc8f4234105a04872c45b07f633811d14->leave($__internal_a1523a7f2d93589e921d19160dfdb42bc8f4234105a04872c45b07f633811d14_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c7acd9b3efc3013b986dc0ba48797c1e2912978036b3dd63dc66f2cfdd125581 = $this->env->getExtension("native_profiler");
        $__internal_c7acd9b3efc3013b986dc0ba48797c1e2912978036b3dd63dc66f2cfdd125581->enter($__internal_c7acd9b3efc3013b986dc0ba48797c1e2912978036b3dd63dc66f2cfdd125581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_c7acd9b3efc3013b986dc0ba48797c1e2912978036b3dd63dc66f2cfdd125581->leave($__internal_c7acd9b3efc3013b986dc0ba48797c1e2912978036b3dd63dc66f2cfdd125581_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/User/fields.html.twig";
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

<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b9ea9587fa0901dd7fffca407b715cf63ea076cd5414b47d2a9a72893fc0598d extends Twig_Template
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
        $__internal_b62e79fd7101793d4e89ee3db4d06268bac20ab5f1a5518b36f2e4afd3f09a15 = $this->env->getExtension("native_profiler");
        $__internal_b62e79fd7101793d4e89ee3db4d06268bac20ab5f1a5518b36f2e4afd3f09a15->enter($__internal_b62e79fd7101793d4e89ee3db4d06268bac20ab5f1a5518b36f2e4afd3f09a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b62e79fd7101793d4e89ee3db4d06268bac20ab5f1a5518b36f2e4afd3f09a15->leave($__internal_b62e79fd7101793d4e89ee3db4d06268bac20ab5f1a5518b36f2e4afd3f09a15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */

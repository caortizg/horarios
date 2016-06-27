<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_6612161ba596e1dd3d40a5bd2601351f42d3f40fd2310eb88ac43391b0a98112 extends Twig_Template
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
        $__internal_504ea39a4e18425ff9e469a4f91b3d192ad7fd72bbcb855fc9f940abc05f0463 = $this->env->getExtension("native_profiler");
        $__internal_504ea39a4e18425ff9e469a4f91b3d192ad7fd72bbcb855fc9f940abc05f0463->enter($__internal_504ea39a4e18425ff9e469a4f91b3d192ad7fd72bbcb855fc9f940abc05f0463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_504ea39a4e18425ff9e469a4f91b3d192ad7fd72bbcb855fc9f940abc05f0463->leave($__internal_504ea39a4e18425ff9e469a4f91b3d192ad7fd72bbcb855fc9f940abc05f0463_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0076571d9ee736f4bce83946d7fdf77ebb8c15353bf8977514424b85a7aea889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3cff08aa878acf366908394cbb32eeddf4a3033df3d58a584e387fa2012b8d5 = $this->env->getExtension("native_profiler");
        $__internal_b3cff08aa878acf366908394cbb32eeddf4a3033df3d58a584e387fa2012b8d5->enter($__internal_b3cff08aa878acf366908394cbb32eeddf4a3033df3d58a584e387fa2012b8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3cff08aa878acf366908394cbb32eeddf4a3033df3d58a584e387fa2012b8d5->leave($__internal_b3cff08aa878acf366908394cbb32eeddf4a3033df3d58a584e387fa2012b8d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98e3163e8f6d3475dd95fcf1233056b48575624f91051d7a348fc5df953203d1 = $this->env->getExtension("native_profiler");
        $__internal_98e3163e8f6d3475dd95fcf1233056b48575624f91051d7a348fc5df953203d1->enter($__internal_98e3163e8f6d3475dd95fcf1233056b48575624f91051d7a348fc5df953203d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_98e3163e8f6d3475dd95fcf1233056b48575624f91051d7a348fc5df953203d1->leave($__internal_98e3163e8f6d3475dd95fcf1233056b48575624f91051d7a348fc5df953203d1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6c7a0cb4d154c98e339f35cc979555ab620f413dc96cc31d8dc8cc4b982a69a = $this->env->getExtension("native_profiler");
        $__internal_a6c7a0cb4d154c98e339f35cc979555ab620f413dc96cc31d8dc8cc4b982a69a->enter($__internal_a6c7a0cb4d154c98e339f35cc979555ab620f413dc96cc31d8dc8cc4b982a69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a6c7a0cb4d154c98e339f35cc979555ab620f413dc96cc31d8dc8cc4b982a69a->leave($__internal_a6c7a0cb4d154c98e339f35cc979555ab620f413dc96cc31d8dc8cc4b982a69a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e0f0093023804dbcffd0b9c682eef29341e8c694fd31522e4952e30ba22db96 = $this->env->getExtension("native_profiler");
        $__internal_4e0f0093023804dbcffd0b9c682eef29341e8c694fd31522e4952e30ba22db96->enter($__internal_4e0f0093023804dbcffd0b9c682eef29341e8c694fd31522e4952e30ba22db96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4e0f0093023804dbcffd0b9c682eef29341e8c694fd31522e4952e30ba22db96->leave($__internal_4e0f0093023804dbcffd0b9c682eef29341e8c694fd31522e4952e30ba22db96_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

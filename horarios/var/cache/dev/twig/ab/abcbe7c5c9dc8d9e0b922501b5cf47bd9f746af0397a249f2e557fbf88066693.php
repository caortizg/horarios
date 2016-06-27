<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dc2138e0a2f1be12d5fb6e91aa5ce8b23702581a7dd16aaa233ae6ae6e68341a extends Twig_Template
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
        $__internal_33095cf57717866069d212466afc33524ee9ea6c6714193c0b6293682387c119 = $this->env->getExtension("native_profiler");
        $__internal_33095cf57717866069d212466afc33524ee9ea6c6714193c0b6293682387c119->enter($__internal_33095cf57717866069d212466afc33524ee9ea6c6714193c0b6293682387c119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33095cf57717866069d212466afc33524ee9ea6c6714193c0b6293682387c119->leave($__internal_33095cf57717866069d212466afc33524ee9ea6c6714193c0b6293682387c119_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41e4d3439da02ad520ce450f41280c2813ec58aed18d3784f8494ad79fbdb1d3 = $this->env->getExtension("native_profiler");
        $__internal_41e4d3439da02ad520ce450f41280c2813ec58aed18d3784f8494ad79fbdb1d3->enter($__internal_41e4d3439da02ad520ce450f41280c2813ec58aed18d3784f8494ad79fbdb1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_41e4d3439da02ad520ce450f41280c2813ec58aed18d3784f8494ad79fbdb1d3->leave($__internal_41e4d3439da02ad520ce450f41280c2813ec58aed18d3784f8494ad79fbdb1d3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff05554e57e3c5273f8fa6c95277ef3ef5c9cb6fe1a9fbcc4e54c976f8c38fbc = $this->env->getExtension("native_profiler");
        $__internal_ff05554e57e3c5273f8fa6c95277ef3ef5c9cb6fe1a9fbcc4e54c976f8c38fbc->enter($__internal_ff05554e57e3c5273f8fa6c95277ef3ef5c9cb6fe1a9fbcc4e54c976f8c38fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ff05554e57e3c5273f8fa6c95277ef3ef5c9cb6fe1a9fbcc4e54c976f8c38fbc->leave($__internal_ff05554e57e3c5273f8fa6c95277ef3ef5c9cb6fe1a9fbcc4e54c976f8c38fbc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_480f1649069964faf4783e3393184484e3880301f4f3f996be94f984f930a3e7 = $this->env->getExtension("native_profiler");
        $__internal_480f1649069964faf4783e3393184484e3880301f4f3f996be94f984f930a3e7->enter($__internal_480f1649069964faf4783e3393184484e3880301f4f3f996be94f984f930a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_480f1649069964faf4783e3393184484e3880301f4f3f996be94f984f930a3e7->leave($__internal_480f1649069964faf4783e3393184484e3880301f4f3f996be94f984f930a3e7_prof);

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

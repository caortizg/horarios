<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6804dc7e7f217d8c5cd8473dba251198b01e4518daa3338971f196ddc2ebaecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_b7f5021588f28920bad7f7de87713a6faa3ef9a6bd976ac01742a04acae8a40d = $this->env->getExtension("native_profiler");
        $__internal_b7f5021588f28920bad7f7de87713a6faa3ef9a6bd976ac01742a04acae8a40d->enter($__internal_b7f5021588f28920bad7f7de87713a6faa3ef9a6bd976ac01742a04acae8a40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f5021588f28920bad7f7de87713a6faa3ef9a6bd976ac01742a04acae8a40d->leave($__internal_b7f5021588f28920bad7f7de87713a6faa3ef9a6bd976ac01742a04acae8a40d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d81209bf74ef8d8f065b579255e4b8af689feb215cbd6e88a5e6dc1747ff2973 = $this->env->getExtension("native_profiler");
        $__internal_d81209bf74ef8d8f065b579255e4b8af689feb215cbd6e88a5e6dc1747ff2973->enter($__internal_d81209bf74ef8d8f065b579255e4b8af689feb215cbd6e88a5e6dc1747ff2973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d81209bf74ef8d8f065b579255e4b8af689feb215cbd6e88a5e6dc1747ff2973->leave($__internal_d81209bf74ef8d8f065b579255e4b8af689feb215cbd6e88a5e6dc1747ff2973_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3933b4d0e8c8962f886c0fbe9a1fd91a5b2a49df3b26ab8fb64ea9d2abb4038a = $this->env->getExtension("native_profiler");
        $__internal_3933b4d0e8c8962f886c0fbe9a1fd91a5b2a49df3b26ab8fb64ea9d2abb4038a->enter($__internal_3933b4d0e8c8962f886c0fbe9a1fd91a5b2a49df3b26ab8fb64ea9d2abb4038a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3933b4d0e8c8962f886c0fbe9a1fd91a5b2a49df3b26ab8fb64ea9d2abb4038a->leave($__internal_3933b4d0e8c8962f886c0fbe9a1fd91a5b2a49df3b26ab8fb64ea9d2abb4038a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0207a4f2b8e04eb42c49ad7ce218f899b92458d2c1ad166a197286faa7dad7a = $this->env->getExtension("native_profiler");
        $__internal_a0207a4f2b8e04eb42c49ad7ce218f899b92458d2c1ad166a197286faa7dad7a->enter($__internal_a0207a4f2b8e04eb42c49ad7ce218f899b92458d2c1ad166a197286faa7dad7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a0207a4f2b8e04eb42c49ad7ce218f899b92458d2c1ad166a197286faa7dad7a->leave($__internal_a0207a4f2b8e04eb42c49ad7ce218f899b92458d2c1ad166a197286faa7dad7a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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

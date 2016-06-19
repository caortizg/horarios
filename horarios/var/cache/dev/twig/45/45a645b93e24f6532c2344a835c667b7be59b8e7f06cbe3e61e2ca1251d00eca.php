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
        $__internal_7e0a261ddcb467b2c23f979adf713b1ba896cba9e40f5f175cc9166a3e32c759 = $this->env->getExtension("native_profiler");
        $__internal_7e0a261ddcb467b2c23f979adf713b1ba896cba9e40f5f175cc9166a3e32c759->enter($__internal_7e0a261ddcb467b2c23f979adf713b1ba896cba9e40f5f175cc9166a3e32c759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0a261ddcb467b2c23f979adf713b1ba896cba9e40f5f175cc9166a3e32c759->leave($__internal_7e0a261ddcb467b2c23f979adf713b1ba896cba9e40f5f175cc9166a3e32c759_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_919d518e6d13018dd7fa0c7d8a1625a900cadc10492bd05f544cb53caf0ebc6a = $this->env->getExtension("native_profiler");
        $__internal_919d518e6d13018dd7fa0c7d8a1625a900cadc10492bd05f544cb53caf0ebc6a->enter($__internal_919d518e6d13018dd7fa0c7d8a1625a900cadc10492bd05f544cb53caf0ebc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_919d518e6d13018dd7fa0c7d8a1625a900cadc10492bd05f544cb53caf0ebc6a->leave($__internal_919d518e6d13018dd7fa0c7d8a1625a900cadc10492bd05f544cb53caf0ebc6a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a89653395e8e4c496ab83a84bcab70e899236d26353a52b2a2e1697bd18399fe = $this->env->getExtension("native_profiler");
        $__internal_a89653395e8e4c496ab83a84bcab70e899236d26353a52b2a2e1697bd18399fe->enter($__internal_a89653395e8e4c496ab83a84bcab70e899236d26353a52b2a2e1697bd18399fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a89653395e8e4c496ab83a84bcab70e899236d26353a52b2a2e1697bd18399fe->leave($__internal_a89653395e8e4c496ab83a84bcab70e899236d26353a52b2a2e1697bd18399fe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d04f265823de7b6386bf32087cb41e1b1ec71876a85722b38175fc2b3a7a1681 = $this->env->getExtension("native_profiler");
        $__internal_d04f265823de7b6386bf32087cb41e1b1ec71876a85722b38175fc2b3a7a1681->enter($__internal_d04f265823de7b6386bf32087cb41e1b1ec71876a85722b38175fc2b3a7a1681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d04f265823de7b6386bf32087cb41e1b1ec71876a85722b38175fc2b3a7a1681->leave($__internal_d04f265823de7b6386bf32087cb41e1b1ec71876a85722b38175fc2b3a7a1681_prof);

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

<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_80ed4b0bdfe08d5bec99b05ffbe19f87f9239ad99ec210e78c5f9859485fd216 extends Twig_Template
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
        $__internal_c2ecd71c4ce5fb904eae5b1a08f66ccabb5923e7065a6e29d20dd4ae4f798a16 = $this->env->getExtension("native_profiler");
        $__internal_c2ecd71c4ce5fb904eae5b1a08f66ccabb5923e7065a6e29d20dd4ae4f798a16->enter($__internal_c2ecd71c4ce5fb904eae5b1a08f66ccabb5923e7065a6e29d20dd4ae4f798a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c2ecd71c4ce5fb904eae5b1a08f66ccabb5923e7065a6e29d20dd4ae4f798a16->leave($__internal_c2ecd71c4ce5fb904eae5b1a08f66ccabb5923e7065a6e29d20dd4ae4f798a16_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */

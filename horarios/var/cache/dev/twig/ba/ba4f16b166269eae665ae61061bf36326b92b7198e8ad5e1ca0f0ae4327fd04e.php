<?php

/* base.html.twig */
class __TwigTemplate_6204e9542afbc8296602e2cd42d99ff6183b84193197bd581653808e11f0bc03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ad464c15d55f44b7b35259735223805ddd4e72d42fa9e0f616eb016e7c768c8 = $this->env->getExtension("native_profiler");
        $__internal_2ad464c15d55f44b7b35259735223805ddd4e72d42fa9e0f616eb016e7c768c8->enter($__internal_2ad464c15d55f44b7b35259735223805ddd4e72d42fa9e0f616eb016e7c768c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_2ad464c15d55f44b7b35259735223805ddd4e72d42fa9e0f616eb016e7c768c8->leave($__internal_2ad464c15d55f44b7b35259735223805ddd4e72d42fa9e0f616eb016e7c768c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59ac3d3ebb406b3654a3b17acc70f67580bd0747e8d8c1292515beb9aa0dda53 = $this->env->getExtension("native_profiler");
        $__internal_59ac3d3ebb406b3654a3b17acc70f67580bd0747e8d8c1292515beb9aa0dda53->enter($__internal_59ac3d3ebb406b3654a3b17acc70f67580bd0747e8d8c1292515beb9aa0dda53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_59ac3d3ebb406b3654a3b17acc70f67580bd0747e8d8c1292515beb9aa0dda53->leave($__internal_59ac3d3ebb406b3654a3b17acc70f67580bd0747e8d8c1292515beb9aa0dda53_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7ded9c7f8f1fdb655b0f829b1ca4d49a2119c7e6330a38a0690721078698be7 = $this->env->getExtension("native_profiler");
        $__internal_a7ded9c7f8f1fdb655b0f829b1ca4d49a2119c7e6330a38a0690721078698be7->enter($__internal_a7ded9c7f8f1fdb655b0f829b1ca4d49a2119c7e6330a38a0690721078698be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a7ded9c7f8f1fdb655b0f829b1ca4d49a2119c7e6330a38a0690721078698be7->leave($__internal_a7ded9c7f8f1fdb655b0f829b1ca4d49a2119c7e6330a38a0690721078698be7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_65defce9c9bbe5746a7f0eb7a115cac375a90b5669ff24451bf119cb093cfc83 = $this->env->getExtension("native_profiler");
        $__internal_65defce9c9bbe5746a7f0eb7a115cac375a90b5669ff24451bf119cb093cfc83->enter($__internal_65defce9c9bbe5746a7f0eb7a115cac375a90b5669ff24451bf119cb093cfc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65defce9c9bbe5746a7f0eb7a115cac375a90b5669ff24451bf119cb093cfc83->leave($__internal_65defce9c9bbe5746a7f0eb7a115cac375a90b5669ff24451bf119cb093cfc83_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8de79fe6af6554fbfc71a4f7fb2b3f5a7414faeb91499153dfee2b45281da0e6 = $this->env->getExtension("native_profiler");
        $__internal_8de79fe6af6554fbfc71a4f7fb2b3f5a7414faeb91499153dfee2b45281da0e6->enter($__internal_8de79fe6af6554fbfc71a4f7fb2b3f5a7414faeb91499153dfee2b45281da0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_8de79fe6af6554fbfc71a4f7fb2b3f5a7414faeb91499153dfee2b45281da0e6->leave($__internal_8de79fe6af6554fbfc71a4f7fb2b3f5a7414faeb91499153dfee2b45281da0e6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 12,  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 13,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

<?php

/* ::base.html.twig */
class __TwigTemplate_6ea0900187a95b2dc1e3f59317e153b328dcf6872d56f81923620d100ae1973c extends Twig_Template
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
        $__internal_41471903f00d09c5333ffe1b8d3715bb420dc16cfd2b78bb3c9d0d9a6989fd71 = $this->env->getExtension("native_profiler");
        $__internal_41471903f00d09c5333ffe1b8d3715bb420dc16cfd2b78bb3c9d0d9a6989fd71->enter($__internal_41471903f00d09c5333ffe1b8d3715bb420dc16cfd2b78bb3c9d0d9a6989fd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_41471903f00d09c5333ffe1b8d3715bb420dc16cfd2b78bb3c9d0d9a6989fd71->leave($__internal_41471903f00d09c5333ffe1b8d3715bb420dc16cfd2b78bb3c9d0d9a6989fd71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c091eea2799c83da08399b56c2365cc5b25b694cb105bc212da0a47d5caf1d1b = $this->env->getExtension("native_profiler");
        $__internal_c091eea2799c83da08399b56c2365cc5b25b694cb105bc212da0a47d5caf1d1b->enter($__internal_c091eea2799c83da08399b56c2365cc5b25b694cb105bc212da0a47d5caf1d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c091eea2799c83da08399b56c2365cc5b25b694cb105bc212da0a47d5caf1d1b->leave($__internal_c091eea2799c83da08399b56c2365cc5b25b694cb105bc212da0a47d5caf1d1b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_237bc3316d81be2f454daa3ab0f9d4c2f70590e9938e11a888b993fdcaad9761 = $this->env->getExtension("native_profiler");
        $__internal_237bc3316d81be2f454daa3ab0f9d4c2f70590e9938e11a888b993fdcaad9761->enter($__internal_237bc3316d81be2f454daa3ab0f9d4c2f70590e9938e11a888b993fdcaad9761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_237bc3316d81be2f454daa3ab0f9d4c2f70590e9938e11a888b993fdcaad9761->leave($__internal_237bc3316d81be2f454daa3ab0f9d4c2f70590e9938e11a888b993fdcaad9761_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_21bc81cb46264cf7ee4e0eff1ad7ff44bdbe143cd942f1850038ce249145e07d = $this->env->getExtension("native_profiler");
        $__internal_21bc81cb46264cf7ee4e0eff1ad7ff44bdbe143cd942f1850038ce249145e07d->enter($__internal_21bc81cb46264cf7ee4e0eff1ad7ff44bdbe143cd942f1850038ce249145e07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_21bc81cb46264cf7ee4e0eff1ad7ff44bdbe143cd942f1850038ce249145e07d->leave($__internal_21bc81cb46264cf7ee4e0eff1ad7ff44bdbe143cd942f1850038ce249145e07d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cb8d219c6ebe64f743743511df8d609b4f1ffabf54339c339951e72b47bc6d6 = $this->env->getExtension("native_profiler");
        $__internal_6cb8d219c6ebe64f743743511df8d609b4f1ffabf54339c339951e72b47bc6d6->enter($__internal_6cb8d219c6ebe64f743743511df8d609b4f1ffabf54339c339951e72b47bc6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_6cb8d219c6ebe64f743743511df8d609b4f1ffabf54339c339951e72b47bc6d6->leave($__internal_6cb8d219c6ebe64f743743511df8d609b4f1ffabf54339c339951e72b47bc6d6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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

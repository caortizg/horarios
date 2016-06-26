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
        $__internal_fc635ddb5600d6082777d4d6043cfe08d250d17b45a07ee18ac4a9b5e133dbc9 = $this->env->getExtension("native_profiler");
        $__internal_fc635ddb5600d6082777d4d6043cfe08d250d17b45a07ee18ac4a9b5e133dbc9->enter($__internal_fc635ddb5600d6082777d4d6043cfe08d250d17b45a07ee18ac4a9b5e133dbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fc635ddb5600d6082777d4d6043cfe08d250d17b45a07ee18ac4a9b5e133dbc9->leave($__internal_fc635ddb5600d6082777d4d6043cfe08d250d17b45a07ee18ac4a9b5e133dbc9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a24893aa1a2861588cd4aba1c28f78fa5c4b3f11717aa774a48378837d8c6ea2 = $this->env->getExtension("native_profiler");
        $__internal_a24893aa1a2861588cd4aba1c28f78fa5c4b3f11717aa774a48378837d8c6ea2->enter($__internal_a24893aa1a2861588cd4aba1c28f78fa5c4b3f11717aa774a48378837d8c6ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a24893aa1a2861588cd4aba1c28f78fa5c4b3f11717aa774a48378837d8c6ea2->leave($__internal_a24893aa1a2861588cd4aba1c28f78fa5c4b3f11717aa774a48378837d8c6ea2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee143d9478f302234a6bf5a31e8566ffd8caad3618c23c30d120baeeb20cda46 = $this->env->getExtension("native_profiler");
        $__internal_ee143d9478f302234a6bf5a31e8566ffd8caad3618c23c30d120baeeb20cda46->enter($__internal_ee143d9478f302234a6bf5a31e8566ffd8caad3618c23c30d120baeeb20cda46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ee143d9478f302234a6bf5a31e8566ffd8caad3618c23c30d120baeeb20cda46->leave($__internal_ee143d9478f302234a6bf5a31e8566ffd8caad3618c23c30d120baeeb20cda46_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a37c3ae6559b1f6d114a6d0ba21e7efa925a4aa085b8e24ba4855fc305a95a = $this->env->getExtension("native_profiler");
        $__internal_e6a37c3ae6559b1f6d114a6d0ba21e7efa925a4aa085b8e24ba4855fc305a95a->enter($__internal_e6a37c3ae6559b1f6d114a6d0ba21e7efa925a4aa085b8e24ba4855fc305a95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6a37c3ae6559b1f6d114a6d0ba21e7efa925a4aa085b8e24ba4855fc305a95a->leave($__internal_e6a37c3ae6559b1f6d114a6d0ba21e7efa925a4aa085b8e24ba4855fc305a95a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_205c0015248cb754c2a7e29c380e83455b95e1efa2b3ecd059a7f0d98e95d0cf = $this->env->getExtension("native_profiler");
        $__internal_205c0015248cb754c2a7e29c380e83455b95e1efa2b3ecd059a7f0d98e95d0cf->enter($__internal_205c0015248cb754c2a7e29c380e83455b95e1efa2b3ecd059a7f0d98e95d0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_205c0015248cb754c2a7e29c380e83455b95e1efa2b3ecd059a7f0d98e95d0cf->leave($__internal_205c0015248cb754c2a7e29c380e83455b95e1efa2b3ecd059a7f0d98e95d0cf_prof);

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

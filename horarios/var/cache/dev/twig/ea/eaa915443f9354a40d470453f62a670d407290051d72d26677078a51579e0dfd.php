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
        $__internal_7eb4d57e93c2feb54307a790495475f80d7ffba4f26cebe995275f366e9c5902 = $this->env->getExtension("native_profiler");
        $__internal_7eb4d57e93c2feb54307a790495475f80d7ffba4f26cebe995275f366e9c5902->enter($__internal_7eb4d57e93c2feb54307a790495475f80d7ffba4f26cebe995275f366e9c5902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7eb4d57e93c2feb54307a790495475f80d7ffba4f26cebe995275f366e9c5902->leave($__internal_7eb4d57e93c2feb54307a790495475f80d7ffba4f26cebe995275f366e9c5902_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_38363fabe2038bb7f8714e8e734d286faf6e67a8d0987140ee04fe8ddf2db9ea = $this->env->getExtension("native_profiler");
        $__internal_38363fabe2038bb7f8714e8e734d286faf6e67a8d0987140ee04fe8ddf2db9ea->enter($__internal_38363fabe2038bb7f8714e8e734d286faf6e67a8d0987140ee04fe8ddf2db9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_38363fabe2038bb7f8714e8e734d286faf6e67a8d0987140ee04fe8ddf2db9ea->leave($__internal_38363fabe2038bb7f8714e8e734d286faf6e67a8d0987140ee04fe8ddf2db9ea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2ee73d9916dded2ab931faef0913d8d6a7d6e237959afe3ddeb298f93893ccb = $this->env->getExtension("native_profiler");
        $__internal_f2ee73d9916dded2ab931faef0913d8d6a7d6e237959afe3ddeb298f93893ccb->enter($__internal_f2ee73d9916dded2ab931faef0913d8d6a7d6e237959afe3ddeb298f93893ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2ee73d9916dded2ab931faef0913d8d6a7d6e237959afe3ddeb298f93893ccb->leave($__internal_f2ee73d9916dded2ab931faef0913d8d6a7d6e237959afe3ddeb298f93893ccb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c113f23616d9bded1cbf9be95a73eab0d8c663a4ce4cf339865dfa1525a801d = $this->env->getExtension("native_profiler");
        $__internal_4c113f23616d9bded1cbf9be95a73eab0d8c663a4ce4cf339865dfa1525a801d->enter($__internal_4c113f23616d9bded1cbf9be95a73eab0d8c663a4ce4cf339865dfa1525a801d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c113f23616d9bded1cbf9be95a73eab0d8c663a4ce4cf339865dfa1525a801d->leave($__internal_4c113f23616d9bded1cbf9be95a73eab0d8c663a4ce4cf339865dfa1525a801d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d54558115abaf41283b5d69214f9ebf25b3dd871045d4323f2514f59e44e6dd7 = $this->env->getExtension("native_profiler");
        $__internal_d54558115abaf41283b5d69214f9ebf25b3dd871045d4323f2514f59e44e6dd7->enter($__internal_d54558115abaf41283b5d69214f9ebf25b3dd871045d4323f2514f59e44e6dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_d54558115abaf41283b5d69214f9ebf25b3dd871045d4323f2514f59e44e6dd7->leave($__internal_d54558115abaf41283b5d69214f9ebf25b3dd871045d4323f2514f59e44e6dd7_prof);

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

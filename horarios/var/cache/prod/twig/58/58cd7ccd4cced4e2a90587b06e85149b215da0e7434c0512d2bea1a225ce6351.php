<?php

/* @CaogHorarios/layout.html.twig */
class __TwigTemplate_541504b3577d263d9324d951303eb90c3eb38ce8cead5a270297410a30ee5f7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'modal' => array($this, 'block_modal'),
            'header' => array($this, 'block_header'),
            'alert' => array($this, 'block_alert'),
            'titleBody' => array($this, 'block_titleBody'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Creacion de horarios\">
        <meta name=\"author\" content=\"Carlos A. Ortiz - Jaime B. Robles\">
        ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>

    <body>        
        ";
        // line 17
        $this->displayBlock('modal', $context, $blocks);
        // line 19
        echo "        <div class=\"row\">     
            ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "            
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\"></div>
            <div class=\"col-md-8\"> 
            ";
        // line 27
        $this->displayBlock('alert', $context, $blocks);
        // line 28
        echo "            ";
        $this->displayBlock('titleBody', $context, $blocks);
        // line 33
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "            </div>
            <div class=\"col-md-2\"></div>            
        </div>
        <div class=\"row\">
            ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo "        </div>
        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Creacion de horarios";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "        ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 17
    public function block_modal($context, array $blocks = array())
    {
        // line 18
        echo "        ";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "@CaogHorarios/layout.html.twig", 21)->display($context);
        // line 22
        echo "            ";
    }

    // line 27
    public function block_alert($context, array $blocks = array())
    {
        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "@CaogHorarios/layout.html.twig", 27)->display($context);
    }

    // line 28
    public function block_titleBody($context, array $blocks = array())
    {
        // line 29
        echo "                <div class=\"page-header\">
                    <h1>";
        // line 30
        if (array_key_exists("titleBody", $context)) {
            echo twig_escape_filter($this->env, (isset($context["titleBody"]) ? $context["titleBody"] : null), "html", null, true);
        } else {
            echo "Horarios";
        }
        echo "</h1>
                </div>
            ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "@CaogHorarios/layout.html.twig", 39)->display($context);
        // line 40
        echo "            ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "@CaogHorarios/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 44,  176 => 43,  173 => 42,  169 => 40,  166 => 39,  163 => 38,  158 => 33,  147 => 30,  144 => 29,  141 => 28,  135 => 27,  131 => 22,  128 => 21,  125 => 20,  121 => 18,  118 => 17,  112 => 12,  107 => 11,  104 => 10,  100 => 9,  97 => 8,  91 => 5,  86 => 46,  84 => 42,  81 => 41,  79 => 38,  73 => 34,  70 => 33,  67 => 28,  65 => 27,  58 => 22,  56 => 20,  53 => 19,  51 => 17,  46 => 14,  43 => 10,  41 => 8,  35 => 5,  29 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="es">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}Creacion de horarios{% endblock %}</title>*/
/*         <meta name="description" content="Creacion de horarios">*/
/*         <meta name="author" content="Carlos A. Ortiz - Jaime B. Robles">*/
/*         {% block head %}*/
/*         {% endblock %}*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('public/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('public/css/bootstrap-theme.min.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>        */
/*         {% block modal %}*/
/*         {% endblock %}*/
/*         <div class="row">     */
/*             {% block header %}*/
/*                 {% include 'CaogHorariosBundle::/general/header.html.twig' %}*/
/*             {% endblock %}            */
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-2"></div>*/
/*             <div class="col-md-8"> */
/*             {% block alert %}{% include 'CaogHorariosBundle::/general/alert.html.twig' %}{% endblock %}*/
/*             {% block titleBody %}*/
/*                 <div class="page-header">*/
/*                     <h1>{%if titleBody is defined %}{{titleBody}}{%else%}Horarios{%endif%}</h1>*/
/*                 </div>*/
/*             {% endblock %}*/
/*             {% block body %}{% endblock %}*/
/*             </div>*/
/*             <div class="col-md-2"></div>            */
/*         </div>*/
/*         <div class="row">*/
/*             {% block footer %}*/
/*                 {% include 'CaogHorariosBundle::/general/footer.html.twig' %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/

<?php

/* CaogHorariosBundle::layout.html.twig */
class __TwigTemplate_5381bab555ff349e25035e64fe5fcc34edf9e26c8acec4b708ca856032a41f44 extends Twig_Template
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
        $__internal_50967ca326a486afcad1cc16cc4fe434eafe3980a4bab6118dd532f2fe263e91 = $this->env->getExtension("native_profiler");
        $__internal_50967ca326a486afcad1cc16cc4fe434eafe3980a4bab6118dd532f2fe263e91->enter($__internal_50967ca326a486afcad1cc16cc4fe434eafe3980a4bab6118dd532f2fe263e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::layout.html.twig"));

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
        
        $__internal_50967ca326a486afcad1cc16cc4fe434eafe3980a4bab6118dd532f2fe263e91->leave($__internal_50967ca326a486afcad1cc16cc4fe434eafe3980a4bab6118dd532f2fe263e91_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c9c7456e66cbb127f2242693bcf71b23d3d903a490f9bc1f3794bfdcbf9dfef = $this->env->getExtension("native_profiler");
        $__internal_5c9c7456e66cbb127f2242693bcf71b23d3d903a490f9bc1f3794bfdcbf9dfef->enter($__internal_5c9c7456e66cbb127f2242693bcf71b23d3d903a490f9bc1f3794bfdcbf9dfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_5c9c7456e66cbb127f2242693bcf71b23d3d903a490f9bc1f3794bfdcbf9dfef->leave($__internal_5c9c7456e66cbb127f2242693bcf71b23d3d903a490f9bc1f3794bfdcbf9dfef_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_f613ef448c9b1880cc19806845c8555ba2b859274ba4a435ea520b63bca010b5 = $this->env->getExtension("native_profiler");
        $__internal_f613ef448c9b1880cc19806845c8555ba2b859274ba4a435ea520b63bca010b5->enter($__internal_f613ef448c9b1880cc19806845c8555ba2b859274ba4a435ea520b63bca010b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_f613ef448c9b1880cc19806845c8555ba2b859274ba4a435ea520b63bca010b5->leave($__internal_f613ef448c9b1880cc19806845c8555ba2b859274ba4a435ea520b63bca010b5_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06761b7abc633f6f0f50ecaac69f608ab9dcca353c2fed7fa74ebed3377f30b2 = $this->env->getExtension("native_profiler");
        $__internal_06761b7abc633f6f0f50ecaac69f608ab9dcca353c2fed7fa74ebed3377f30b2->enter($__internal_06761b7abc633f6f0f50ecaac69f608ab9dcca353c2fed7fa74ebed3377f30b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_06761b7abc633f6f0f50ecaac69f608ab9dcca353c2fed7fa74ebed3377f30b2->leave($__internal_06761b7abc633f6f0f50ecaac69f608ab9dcca353c2fed7fa74ebed3377f30b2_prof);

    }

    // line 17
    public function block_modal($context, array $blocks = array())
    {
        $__internal_085f83a1429ba49d7983557ee395c092f46c28ffcc22982c95c040fb05c29489 = $this->env->getExtension("native_profiler");
        $__internal_085f83a1429ba49d7983557ee395c092f46c28ffcc22982c95c040fb05c29489->enter($__internal_085f83a1429ba49d7983557ee395c092f46c28ffcc22982c95c040fb05c29489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 18
        echo "        ";
        
        $__internal_085f83a1429ba49d7983557ee395c092f46c28ffcc22982c95c040fb05c29489->leave($__internal_085f83a1429ba49d7983557ee395c092f46c28ffcc22982c95c040fb05c29489_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_20e4daa76d9afb31b5ed2678aa12b42b2dab8c01dcd1994438911b58d88bd3e7 = $this->env->getExtension("native_profiler");
        $__internal_20e4daa76d9afb31b5ed2678aa12b42b2dab8c01dcd1994438911b58d88bd3e7->enter($__internal_20e4daa76d9afb31b5ed2678aa12b42b2dab8c01dcd1994438911b58d88bd3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "CaogHorariosBundle::layout.html.twig", 21)->display($context);
        // line 22
        echo "            ";
        
        $__internal_20e4daa76d9afb31b5ed2678aa12b42b2dab8c01dcd1994438911b58d88bd3e7->leave($__internal_20e4daa76d9afb31b5ed2678aa12b42b2dab8c01dcd1994438911b58d88bd3e7_prof);

    }

    // line 27
    public function block_alert($context, array $blocks = array())
    {
        $__internal_3878898db2d3bdfcbea3087fc9b83c639363dfa025529e1644b822e7352e2726 = $this->env->getExtension("native_profiler");
        $__internal_3878898db2d3bdfcbea3087fc9b83c639363dfa025529e1644b822e7352e2726->enter($__internal_3878898db2d3bdfcbea3087fc9b83c639363dfa025529e1644b822e7352e2726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "CaogHorariosBundle::layout.html.twig", 27)->display($context);
        
        $__internal_3878898db2d3bdfcbea3087fc9b83c639363dfa025529e1644b822e7352e2726->leave($__internal_3878898db2d3bdfcbea3087fc9b83c639363dfa025529e1644b822e7352e2726_prof);

    }

    // line 28
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_88c92a126f1fec47130f5073c5cabbac84d00f902a726feab9bc0a9a3b0e9132 = $this->env->getExtension("native_profiler");
        $__internal_88c92a126f1fec47130f5073c5cabbac84d00f902a726feab9bc0a9a3b0e9132->enter($__internal_88c92a126f1fec47130f5073c5cabbac84d00f902a726feab9bc0a9a3b0e9132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

        // line 29
        echo "                <div class=\"page-header\">
                    <h1>";
        // line 30
        if (array_key_exists("titleBody", $context)) {
            echo twig_escape_filter($this->env, (isset($context["titleBody"]) ? $context["titleBody"] : $this->getContext($context, "titleBody")), "html", null, true);
        } else {
            echo "Horarios";
        }
        echo "</h1>
                </div>
            ";
        
        $__internal_88c92a126f1fec47130f5073c5cabbac84d00f902a726feab9bc0a9a3b0e9132->leave($__internal_88c92a126f1fec47130f5073c5cabbac84d00f902a726feab9bc0a9a3b0e9132_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbcf515dc5dec8087a395b09e53e0c3874a90d866c0beb16a9489d2853ebc772 = $this->env->getExtension("native_profiler");
        $__internal_cbcf515dc5dec8087a395b09e53e0c3874a90d866c0beb16a9489d2853ebc772->enter($__internal_cbcf515dc5dec8087a395b09e53e0c3874a90d866c0beb16a9489d2853ebc772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cbcf515dc5dec8087a395b09e53e0c3874a90d866c0beb16a9489d2853ebc772->leave($__internal_cbcf515dc5dec8087a395b09e53e0c3874a90d866c0beb16a9489d2853ebc772_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8e42ad3876ae1bd65b08a3292ac32c438db77015b76b83f7c0585e0f75187721 = $this->env->getExtension("native_profiler");
        $__internal_8e42ad3876ae1bd65b08a3292ac32c438db77015b76b83f7c0585e0f75187721->enter($__internal_8e42ad3876ae1bd65b08a3292ac32c438db77015b76b83f7c0585e0f75187721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 39
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "CaogHorariosBundle::layout.html.twig", 39)->display($context);
        // line 40
        echo "            ";
        
        $__internal_8e42ad3876ae1bd65b08a3292ac32c438db77015b76b83f7c0585e0f75187721->leave($__internal_8e42ad3876ae1bd65b08a3292ac32c438db77015b76b83f7c0585e0f75187721_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0a34a1a512891d04cc314297160d9413fce6081389356580992d07c296ba1be = $this->env->getExtension("native_profiler");
        $__internal_c0a34a1a512891d04cc314297160d9413fce6081389356580992d07c296ba1be->enter($__internal_c0a34a1a512891d04cc314297160d9413fce6081389356580992d07c296ba1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_c0a34a1a512891d04cc314297160d9413fce6081389356580992d07c296ba1be->leave($__internal_c0a34a1a512891d04cc314297160d9413fce6081389356580992d07c296ba1be_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  244 => 44,  239 => 43,  233 => 42,  226 => 40,  223 => 39,  217 => 38,  206 => 33,  192 => 30,  189 => 29,  183 => 28,  171 => 27,  164 => 22,  161 => 21,  155 => 20,  148 => 18,  142 => 17,  133 => 12,  128 => 11,  122 => 10,  115 => 9,  109 => 8,  97 => 5,  89 => 46,  87 => 42,  84 => 41,  82 => 38,  76 => 34,  73 => 33,  70 => 28,  68 => 27,  61 => 22,  59 => 20,  56 => 19,  54 => 17,  49 => 14,  46 => 10,  44 => 8,  38 => 5,  32 => 1,);
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

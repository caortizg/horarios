<?php

/* CaogHorariosBundle::layout.html.twig */
class __TwigTemplate_fc052d9291555bc13cdf65c06640fd937599de8167acdf464b35fbbcb9167611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'modal' => array($this, 'block_modal'),
            'header' => array($this, 'block_header'),
            'alert' => array($this, 'block_alert'),
            'titleBody' => array($this, 'block_titleBody'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb789f45a7e62d78e03b786b7e8985f2cb08e1b79e2d79291625ef03483867ed = $this->env->getExtension("native_profiler");
        $__internal_cb789f45a7e62d78e03b786b7e8985f2cb08e1b79e2d79291625ef03483867ed->enter($__internal_cb789f45a7e62d78e03b786b7e8985f2cb08e1b79e2d79291625ef03483867ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::layout.html.twig"));

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
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>

    <body>        
        ";
        // line 23
        $this->displayBlock('modal', $context, $blocks);
        // line 25
        echo "        <div class=\"row\">     
            ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "            
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\"></div>
            <div class=\"col-md-8\"> 
            ";
        // line 33
        $this->displayBlock('alert', $context, $blocks);
        // line 34
        echo "            ";
        $this->displayBlock('titleBody', $context, $blocks);
        // line 39
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "            </div>
            <div class=\"col-md-2\"></div>            
        </div>
        <div class=\"row\">
            ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "        </div>
        
    </body>
</html>";
        
        $__internal_cb789f45a7e62d78e03b786b7e8985f2cb08e1b79e2d79291625ef03483867ed->leave($__internal_cb789f45a7e62d78e03b786b7e8985f2cb08e1b79e2d79291625ef03483867ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fca411b2f9072dd4ca02dc2aedebc905934546ef7e674a7765b78b1c2d733774 = $this->env->getExtension("native_profiler");
        $__internal_fca411b2f9072dd4ca02dc2aedebc905934546ef7e674a7765b78b1c2d733774->enter($__internal_fca411b2f9072dd4ca02dc2aedebc905934546ef7e674a7765b78b1c2d733774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_fca411b2f9072dd4ca02dc2aedebc905934546ef7e674a7765b78b1c2d733774->leave($__internal_fca411b2f9072dd4ca02dc2aedebc905934546ef7e674a7765b78b1c2d733774_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a9759319f525c17c4e2e8d53fef4a67b55fbe23951e5980c3cf8a8d5e405dcc = $this->env->getExtension("native_profiler");
        $__internal_6a9759319f525c17c4e2e8d53fef4a67b55fbe23951e5980c3cf8a8d5e405dcc->enter($__internal_6a9759319f525c17c4e2e8d53fef4a67b55fbe23951e5980c3cf8a8d5e405dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_6a9759319f525c17c4e2e8d53fef4a67b55fbe23951e5980c3cf8a8d5e405dcc->leave($__internal_6a9759319f525c17c4e2e8d53fef4a67b55fbe23951e5980c3cf8a8d5e405dcc_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_478df0d6c1a69761d5ec7d7cf0fdda3fd2143d914e19f17f554fbebcb20742b1 = $this->env->getExtension("native_profiler");
        $__internal_478df0d6c1a69761d5ec7d7cf0fdda3fd2143d914e19f17f554fbebcb20742b1->enter($__internal_478df0d6c1a69761d5ec7d7cf0fdda3fd2143d914e19f17f554fbebcb20742b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/actividad.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_478df0d6c1a69761d5ec7d7cf0fdda3fd2143d914e19f17f554fbebcb20742b1->leave($__internal_478df0d6c1a69761d5ec7d7cf0fdda3fd2143d914e19f17f554fbebcb20742b1_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_445ae8a4449cbd40479067913a0910072fa611fe914a77f9d2cdf9b487485e90 = $this->env->getExtension("native_profiler");
        $__internal_445ae8a4449cbd40479067913a0910072fa611fe914a77f9d2cdf9b487485e90->enter($__internal_445ae8a4449cbd40479067913a0910072fa611fe914a77f9d2cdf9b487485e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">urlBase = '";
        // line 18
        echo $this->env->getExtension('routing')->getPath("caog_horarios_homepage");
        echo "'</script>
        ";
        
        $__internal_445ae8a4449cbd40479067913a0910072fa611fe914a77f9d2cdf9b487485e90->leave($__internal_445ae8a4449cbd40479067913a0910072fa611fe914a77f9d2cdf9b487485e90_prof);

    }

    // line 23
    public function block_modal($context, array $blocks = array())
    {
        $__internal_55e6298e287ebda8fa5bb18ef5d620f094259392240151fe98f6063a878f090a = $this->env->getExtension("native_profiler");
        $__internal_55e6298e287ebda8fa5bb18ef5d620f094259392240151fe98f6063a878f090a->enter($__internal_55e6298e287ebda8fa5bb18ef5d620f094259392240151fe98f6063a878f090a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 24
        echo "        ";
        
        $__internal_55e6298e287ebda8fa5bb18ef5d620f094259392240151fe98f6063a878f090a->leave($__internal_55e6298e287ebda8fa5bb18ef5d620f094259392240151fe98f6063a878f090a_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_2be9a7ec9b493cb76a8270947496d1ac329b23475e612bdf406fa64a9f0b2d89 = $this->env->getExtension("native_profiler");
        $__internal_2be9a7ec9b493cb76a8270947496d1ac329b23475e612bdf406fa64a9f0b2d89->enter($__internal_2be9a7ec9b493cb76a8270947496d1ac329b23475e612bdf406fa64a9f0b2d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "CaogHorariosBundle::layout.html.twig", 27)->display($context);
        // line 28
        echo "            ";
        
        $__internal_2be9a7ec9b493cb76a8270947496d1ac329b23475e612bdf406fa64a9f0b2d89->leave($__internal_2be9a7ec9b493cb76a8270947496d1ac329b23475e612bdf406fa64a9f0b2d89_prof);

    }

    // line 33
    public function block_alert($context, array $blocks = array())
    {
        $__internal_dfc6a4c7324beec00cea04e07dd6d6144debbe8594b3780c16a6cbf3c9351c55 = $this->env->getExtension("native_profiler");
        $__internal_dfc6a4c7324beec00cea04e07dd6d6144debbe8594b3780c16a6cbf3c9351c55->enter($__internal_dfc6a4c7324beec00cea04e07dd6d6144debbe8594b3780c16a6cbf3c9351c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "CaogHorariosBundle::layout.html.twig", 33)->display($context);
        
        $__internal_dfc6a4c7324beec00cea04e07dd6d6144debbe8594b3780c16a6cbf3c9351c55->leave($__internal_dfc6a4c7324beec00cea04e07dd6d6144debbe8594b3780c16a6cbf3c9351c55_prof);

    }

    // line 34
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_71d112b05a3707153c2313480d6313cb3ee483464db361a12b5f5b1012b69f3a = $this->env->getExtension("native_profiler");
        $__internal_71d112b05a3707153c2313480d6313cb3ee483464db361a12b5f5b1012b69f3a->enter($__internal_71d112b05a3707153c2313480d6313cb3ee483464db361a12b5f5b1012b69f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

        // line 35
        echo "                <div class=\"page-header\">
                    <h1>";
        // line 36
        if (array_key_exists("titleBody", $context)) {
            echo twig_escape_filter($this->env, (isset($context["titleBody"]) ? $context["titleBody"] : $this->getContext($context, "titleBody")), "html", null, true);
        } else {
            echo "Horarios";
        }
        echo "</h1>
                </div>
            ";
        
        $__internal_71d112b05a3707153c2313480d6313cb3ee483464db361a12b5f5b1012b69f3a->leave($__internal_71d112b05a3707153c2313480d6313cb3ee483464db361a12b5f5b1012b69f3a_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_8250d9d7715df544d72f66cb5f94b326d777896acd4eafbb44634abe138482ed = $this->env->getExtension("native_profiler");
        $__internal_8250d9d7715df544d72f66cb5f94b326d777896acd4eafbb44634abe138482ed->enter($__internal_8250d9d7715df544d72f66cb5f94b326d777896acd4eafbb44634abe138482ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8250d9d7715df544d72f66cb5f94b326d777896acd4eafbb44634abe138482ed->leave($__internal_8250d9d7715df544d72f66cb5f94b326d777896acd4eafbb44634abe138482ed_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7ef918f4718acf56df3f393b8b5ec7dfc561d92ba3aa5928baccb65da661d4b8 = $this->env->getExtension("native_profiler");
        $__internal_7ef918f4718acf56df3f393b8b5ec7dfc561d92ba3aa5928baccb65da661d4b8->enter($__internal_7ef918f4718acf56df3f393b8b5ec7dfc561d92ba3aa5928baccb65da661d4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 45
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "CaogHorariosBundle::layout.html.twig", 45)->display($context);
        // line 46
        echo "            ";
        
        $__internal_7ef918f4718acf56df3f393b8b5ec7dfc561d92ba3aa5928baccb65da661d4b8->leave($__internal_7ef918f4718acf56df3f393b8b5ec7dfc561d92ba3aa5928baccb65da661d4b8_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 46,  251 => 45,  245 => 44,  234 => 39,  220 => 36,  217 => 35,  211 => 34,  199 => 33,  192 => 28,  189 => 27,  183 => 26,  176 => 24,  170 => 23,  161 => 18,  157 => 17,  152 => 16,  146 => 15,  137 => 13,  133 => 12,  128 => 11,  122 => 10,  115 => 9,  109 => 8,  97 => 5,  87 => 47,  85 => 44,  79 => 40,  76 => 39,  73 => 34,  71 => 33,  64 => 28,  62 => 26,  59 => 25,  57 => 23,  52 => 20,  49 => 15,  46 => 10,  44 => 8,  38 => 5,  32 => 1,);
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
/*             <link href="{{ asset('public/css/bootstrap-theme.min.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('public/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('public/css/actividad.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*             <script type="text/javascript">urlBase = '{{path('caog_horarios_homepage')}}'</script>*/
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
/*         */
/*     </body>*/
/* </html>*/

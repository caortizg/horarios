<?php

/* @CaogHorarios/layout.html.twig */
class __TwigTemplate_35c2c6b1ed846895d5006c2b2e859c4ea6fb7f6d1b70ce9229dfd53c01c99ced extends Twig_Template
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
        $__internal_45ddde2f712e400f8c073ba0de48f13936f23049c7a4ce8cedf223d503e438ac = $this->env->getExtension("native_profiler");
        $__internal_45ddde2f712e400f8c073ba0de48f13936f23049c7a4ce8cedf223d503e438ac->enter($__internal_45ddde2f712e400f8c073ba0de48f13936f23049c7a4ce8cedf223d503e438ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/layout.html.twig"));

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
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </head>

    <body>        
        ";
        // line 24
        $this->displayBlock('modal', $context, $blocks);
        // line 26
        echo "        <div class=\"row\">     
            ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "            
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\"></div>
            <div class=\"col-md-8\"> 
            ";
        // line 34
        $this->displayBlock('alert', $context, $blocks);
        // line 35
        echo "            ";
        $this->displayBlock('titleBody', $context, $blocks);
        // line 40
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </div>
            <div class=\"col-md-2\"></div>            
        </div>
        <div class=\"row\">
            ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "        </div>
        
    </body>
</html>";
        
        $__internal_45ddde2f712e400f8c073ba0de48f13936f23049c7a4ce8cedf223d503e438ac->leave($__internal_45ddde2f712e400f8c073ba0de48f13936f23049c7a4ce8cedf223d503e438ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75795b224f1fa1e1c44067128ede016182badf152d3e629c67e701c322219d84 = $this->env->getExtension("native_profiler");
        $__internal_75795b224f1fa1e1c44067128ede016182badf152d3e629c67e701c322219d84->enter($__internal_75795b224f1fa1e1c44067128ede016182badf152d3e629c67e701c322219d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_75795b224f1fa1e1c44067128ede016182badf152d3e629c67e701c322219d84->leave($__internal_75795b224f1fa1e1c44067128ede016182badf152d3e629c67e701c322219d84_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_f05ba38c2337b3e8b891a2d757f6a1fd5f901776316f16d42e54c2390f8e74e4 = $this->env->getExtension("native_profiler");
        $__internal_f05ba38c2337b3e8b891a2d757f6a1fd5f901776316f16d42e54c2390f8e74e4->enter($__internal_f05ba38c2337b3e8b891a2d757f6a1fd5f901776316f16d42e54c2390f8e74e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_f05ba38c2337b3e8b891a2d757f6a1fd5f901776316f16d42e54c2390f8e74e4->leave($__internal_f05ba38c2337b3e8b891a2d757f6a1fd5f901776316f16d42e54c2390f8e74e4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea991c7f8a3d4b64ceb8500a1ab8c8ad47129edcc0b1521a80e59b62d379fe2c = $this->env->getExtension("native_profiler");
        $__internal_ea991c7f8a3d4b64ceb8500a1ab8c8ad47129edcc0b1521a80e59b62d379fe2c->enter($__internal_ea991c7f8a3d4b64ceb8500a1ab8c8ad47129edcc0b1521a80e59b62d379fe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
             <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/fullcalendar-2.8.0/fullcalendar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_ea991c7f8a3d4b64ceb8500a1ab8c8ad47129edcc0b1521a80e59b62d379fe2c->leave($__internal_ea991c7f8a3d4b64ceb8500a1ab8c8ad47129edcc0b1521a80e59b62d379fe2c_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71a5b7d8b940e734b344cba63ae8ffa004c91869aec11a5969d1c4a783fca1f5 = $this->env->getExtension("native_profiler");
        $__internal_71a5b7d8b940e734b344cba63ae8ffa004c91869aec11a5969d1c4a783fca1f5->enter($__internal_71a5b7d8b940e734b344cba63ae8ffa004c91869aec11a5969d1c4a783fca1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">urlBase = '";
        // line 19
        echo $this->env->getExtension('routing')->getPath("caog_horarios_homepage");
        echo "'</script>
        ";
        
        $__internal_71a5b7d8b940e734b344cba63ae8ffa004c91869aec11a5969d1c4a783fca1f5->leave($__internal_71a5b7d8b940e734b344cba63ae8ffa004c91869aec11a5969d1c4a783fca1f5_prof);

    }

    // line 24
    public function block_modal($context, array $blocks = array())
    {
        $__internal_4a6155ec642cc22162446de58da081c157bbb2b86c8bc5530be24eda0c561ad1 = $this->env->getExtension("native_profiler");
        $__internal_4a6155ec642cc22162446de58da081c157bbb2b86c8bc5530be24eda0c561ad1->enter($__internal_4a6155ec642cc22162446de58da081c157bbb2b86c8bc5530be24eda0c561ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 25
        echo "        ";
        
        $__internal_4a6155ec642cc22162446de58da081c157bbb2b86c8bc5530be24eda0c561ad1->leave($__internal_4a6155ec642cc22162446de58da081c157bbb2b86c8bc5530be24eda0c561ad1_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_5b005929884dfe01f382a2a70e5f05da61f7c4e3f8c84dd87410e1b3b081a6ea = $this->env->getExtension("native_profiler");
        $__internal_5b005929884dfe01f382a2a70e5f05da61f7c4e3f8c84dd87410e1b3b081a6ea->enter($__internal_5b005929884dfe01f382a2a70e5f05da61f7c4e3f8c84dd87410e1b3b081a6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "@CaogHorarios/layout.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        
        $__internal_5b005929884dfe01f382a2a70e5f05da61f7c4e3f8c84dd87410e1b3b081a6ea->leave($__internal_5b005929884dfe01f382a2a70e5f05da61f7c4e3f8c84dd87410e1b3b081a6ea_prof);

    }

    // line 34
    public function block_alert($context, array $blocks = array())
    {
        $__internal_2ec5e01197813dc2447a84a12709086ef73ab45141105dd1db5242d64d719ed4 = $this->env->getExtension("native_profiler");
        $__internal_2ec5e01197813dc2447a84a12709086ef73ab45141105dd1db5242d64d719ed4->enter($__internal_2ec5e01197813dc2447a84a12709086ef73ab45141105dd1db5242d64d719ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "@CaogHorarios/layout.html.twig", 34)->display($context);
        
        $__internal_2ec5e01197813dc2447a84a12709086ef73ab45141105dd1db5242d64d719ed4->leave($__internal_2ec5e01197813dc2447a84a12709086ef73ab45141105dd1db5242d64d719ed4_prof);

    }

    // line 35
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_afc7ad70036eff9a8290bdc5a053b4b7ddffcb27d0c260bd51cc953afb8382bb = $this->env->getExtension("native_profiler");
        $__internal_afc7ad70036eff9a8290bdc5a053b4b7ddffcb27d0c260bd51cc953afb8382bb->enter($__internal_afc7ad70036eff9a8290bdc5a053b4b7ddffcb27d0c260bd51cc953afb8382bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

        // line 36
        echo "                <div class=\"page-header\">
                    <h1>";
        // line 37
        if (array_key_exists("titleBody", $context)) {
            echo twig_escape_filter($this->env, (isset($context["titleBody"]) ? $context["titleBody"] : $this->getContext($context, "titleBody")), "html", null, true);
        } else {
            echo "Horarios";
        }
        echo "</h1>
                </div>
            ";
        
        $__internal_afc7ad70036eff9a8290bdc5a053b4b7ddffcb27d0c260bd51cc953afb8382bb->leave($__internal_afc7ad70036eff9a8290bdc5a053b4b7ddffcb27d0c260bd51cc953afb8382bb_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff022bb030e00ee91f834b5c666700b6e7da9304e9203190b2b78bc06b49c295 = $this->env->getExtension("native_profiler");
        $__internal_ff022bb030e00ee91f834b5c666700b6e7da9304e9203190b2b78bc06b49c295->enter($__internal_ff022bb030e00ee91f834b5c666700b6e7da9304e9203190b2b78bc06b49c295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff022bb030e00ee91f834b5c666700b6e7da9304e9203190b2b78bc06b49c295->leave($__internal_ff022bb030e00ee91f834b5c666700b6e7da9304e9203190b2b78bc06b49c295_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cbd67b3aeaf10ba9f99c685bb6ed75c9cdc6f186a961453a20eea67347358435 = $this->env->getExtension("native_profiler");
        $__internal_cbd67b3aeaf10ba9f99c685bb6ed75c9cdc6f186a961453a20eea67347358435->enter($__internal_cbd67b3aeaf10ba9f99c685bb6ed75c9cdc6f186a961453a20eea67347358435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "@CaogHorarios/layout.html.twig", 46)->display($context);
        // line 47
        echo "            ";
        
        $__internal_cbd67b3aeaf10ba9f99c685bb6ed75c9cdc6f186a961453a20eea67347358435->leave($__internal_cbd67b3aeaf10ba9f99c685bb6ed75c9cdc6f186a961453a20eea67347358435_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 47,  255 => 46,  249 => 45,  238 => 40,  224 => 37,  221 => 36,  215 => 35,  203 => 34,  196 => 29,  193 => 28,  187 => 27,  180 => 25,  174 => 24,  165 => 19,  161 => 18,  156 => 17,  150 => 16,  141 => 14,  137 => 13,  133 => 12,  128 => 11,  122 => 10,  115 => 9,  109 => 8,  97 => 5,  87 => 48,  85 => 45,  79 => 41,  76 => 40,  73 => 35,  71 => 34,  64 => 29,  62 => 27,  59 => 26,  57 => 24,  52 => 21,  49 => 16,  46 => 10,  44 => 8,  38 => 5,  32 => 1,);
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
/*              <link href="{{ asset('public/fullcalendar-2.8.0/fullcalendar.css') }}" type="text/css" rel="stylesheet" />*/
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

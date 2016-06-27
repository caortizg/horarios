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
        $__internal_083d84bd4791965a6678ab52045fe5f347909a4ca58b1e4660bd8cc154f8ba2b = $this->env->getExtension("native_profiler");
        $__internal_083d84bd4791965a6678ab52045fe5f347909a4ca58b1e4660bd8cc154f8ba2b->enter($__internal_083d84bd4791965a6678ab52045fe5f347909a4ca58b1e4660bd8cc154f8ba2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/layout.html.twig"));

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
        
        $__internal_083d84bd4791965a6678ab52045fe5f347909a4ca58b1e4660bd8cc154f8ba2b->leave($__internal_083d84bd4791965a6678ab52045fe5f347909a4ca58b1e4660bd8cc154f8ba2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fed290d717105b15d22cd14b1723e5d9bef9233f7210f263ab031aabea254ee4 = $this->env->getExtension("native_profiler");
        $__internal_fed290d717105b15d22cd14b1723e5d9bef9233f7210f263ab031aabea254ee4->enter($__internal_fed290d717105b15d22cd14b1723e5d9bef9233f7210f263ab031aabea254ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_fed290d717105b15d22cd14b1723e5d9bef9233f7210f263ab031aabea254ee4->leave($__internal_fed290d717105b15d22cd14b1723e5d9bef9233f7210f263ab031aabea254ee4_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b7adfefe1b117e9e5edd60cbd09c582dc3f7f90d583f4a1dbab0fc175b9d67a = $this->env->getExtension("native_profiler");
        $__internal_1b7adfefe1b117e9e5edd60cbd09c582dc3f7f90d583f4a1dbab0fc175b9d67a->enter($__internal_1b7adfefe1b117e9e5edd60cbd09c582dc3f7f90d583f4a1dbab0fc175b9d67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_1b7adfefe1b117e9e5edd60cbd09c582dc3f7f90d583f4a1dbab0fc175b9d67a->leave($__internal_1b7adfefe1b117e9e5edd60cbd09c582dc3f7f90d583f4a1dbab0fc175b9d67a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad6c0337d86298d0b1373a2d6429480e968562251003c5bab21508e276dc104e = $this->env->getExtension("native_profiler");
        $__internal_ad6c0337d86298d0b1373a2d6429480e968562251003c5bab21508e276dc104e->enter($__internal_ad6c0337d86298d0b1373a2d6429480e968562251003c5bab21508e276dc104e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ad6c0337d86298d0b1373a2d6429480e968562251003c5bab21508e276dc104e->leave($__internal_ad6c0337d86298d0b1373a2d6429480e968562251003c5bab21508e276dc104e_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a38327851424d33b6502b750d29fdcbd2a9911509855625eb5d2e8a41f9ee988 = $this->env->getExtension("native_profiler");
        $__internal_a38327851424d33b6502b750d29fdcbd2a9911509855625eb5d2e8a41f9ee988->enter($__internal_a38327851424d33b6502b750d29fdcbd2a9911509855625eb5d2e8a41f9ee988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a38327851424d33b6502b750d29fdcbd2a9911509855625eb5d2e8a41f9ee988->leave($__internal_a38327851424d33b6502b750d29fdcbd2a9911509855625eb5d2e8a41f9ee988_prof);

    }

    // line 24
    public function block_modal($context, array $blocks = array())
    {
        $__internal_b4b16901793917438c5ea89f1743133215e82c26a0fce280255553bfe062ed62 = $this->env->getExtension("native_profiler");
        $__internal_b4b16901793917438c5ea89f1743133215e82c26a0fce280255553bfe062ed62->enter($__internal_b4b16901793917438c5ea89f1743133215e82c26a0fce280255553bfe062ed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 25
        echo "        ";
        
        $__internal_b4b16901793917438c5ea89f1743133215e82c26a0fce280255553bfe062ed62->leave($__internal_b4b16901793917438c5ea89f1743133215e82c26a0fce280255553bfe062ed62_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_a4400df920cda6986f180e339594b7a88cc9e166c7a08d5c1aeef410f9de4875 = $this->env->getExtension("native_profiler");
        $__internal_a4400df920cda6986f180e339594b7a88cc9e166c7a08d5c1aeef410f9de4875->enter($__internal_a4400df920cda6986f180e339594b7a88cc9e166c7a08d5c1aeef410f9de4875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "@CaogHorarios/layout.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        
        $__internal_a4400df920cda6986f180e339594b7a88cc9e166c7a08d5c1aeef410f9de4875->leave($__internal_a4400df920cda6986f180e339594b7a88cc9e166c7a08d5c1aeef410f9de4875_prof);

    }

    // line 34
    public function block_alert($context, array $blocks = array())
    {
        $__internal_160248e56df41be7b94e74a134ede73ff25b79cfad5e5c895105eccd6044ad9a = $this->env->getExtension("native_profiler");
        $__internal_160248e56df41be7b94e74a134ede73ff25b79cfad5e5c895105eccd6044ad9a->enter($__internal_160248e56df41be7b94e74a134ede73ff25b79cfad5e5c895105eccd6044ad9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "@CaogHorarios/layout.html.twig", 34)->display($context);
        
        $__internal_160248e56df41be7b94e74a134ede73ff25b79cfad5e5c895105eccd6044ad9a->leave($__internal_160248e56df41be7b94e74a134ede73ff25b79cfad5e5c895105eccd6044ad9a_prof);

    }

    // line 35
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_2de07776c5c749c1cc23264157d1fb6e0d561eb9c57d5eadc2624a68f3bda3d2 = $this->env->getExtension("native_profiler");
        $__internal_2de07776c5c749c1cc23264157d1fb6e0d561eb9c57d5eadc2624a68f3bda3d2->enter($__internal_2de07776c5c749c1cc23264157d1fb6e0d561eb9c57d5eadc2624a68f3bda3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

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
        
        $__internal_2de07776c5c749c1cc23264157d1fb6e0d561eb9c57d5eadc2624a68f3bda3d2->leave($__internal_2de07776c5c749c1cc23264157d1fb6e0d561eb9c57d5eadc2624a68f3bda3d2_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9dbd8cb6802b6bf0d5ab5f1fbb73c8d9ca5248daf5aeb43cf093f8243431dd5 = $this->env->getExtension("native_profiler");
        $__internal_b9dbd8cb6802b6bf0d5ab5f1fbb73c8d9ca5248daf5aeb43cf093f8243431dd5->enter($__internal_b9dbd8cb6802b6bf0d5ab5f1fbb73c8d9ca5248daf5aeb43cf093f8243431dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9dbd8cb6802b6bf0d5ab5f1fbb73c8d9ca5248daf5aeb43cf093f8243431dd5->leave($__internal_b9dbd8cb6802b6bf0d5ab5f1fbb73c8d9ca5248daf5aeb43cf093f8243431dd5_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d8a7c5d15f7ae372fec7ca72937e8b7996bb8b223d932145d224f9ef0a8d427a = $this->env->getExtension("native_profiler");
        $__internal_d8a7c5d15f7ae372fec7ca72937e8b7996bb8b223d932145d224f9ef0a8d427a->enter($__internal_d8a7c5d15f7ae372fec7ca72937e8b7996bb8b223d932145d224f9ef0a8d427a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "@CaogHorarios/layout.html.twig", 46)->display($context);
        // line 47
        echo "            ";
        
        $__internal_d8a7c5d15f7ae372fec7ca72937e8b7996bb8b223d932145d224f9ef0a8d427a->leave($__internal_d8a7c5d15f7ae372fec7ca72937e8b7996bb8b223d932145d224f9ef0a8d427a_prof);

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

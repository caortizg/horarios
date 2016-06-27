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
        $__internal_213dca5a75963f3531f7109ff0355c5fa21052fa0b1223ab4a3b9246ad81671a = $this->env->getExtension("native_profiler");
        $__internal_213dca5a75963f3531f7109ff0355c5fa21052fa0b1223ab4a3b9246ad81671a->enter($__internal_213dca5a75963f3531f7109ff0355c5fa21052fa0b1223ab4a3b9246ad81671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::layout.html.twig"));

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
        
        $__internal_213dca5a75963f3531f7109ff0355c5fa21052fa0b1223ab4a3b9246ad81671a->leave($__internal_213dca5a75963f3531f7109ff0355c5fa21052fa0b1223ab4a3b9246ad81671a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d73af9d501f22066d4a1516eb3c6edca7cc1a4f3926746bfa299e1ae515ded8 = $this->env->getExtension("native_profiler");
        $__internal_3d73af9d501f22066d4a1516eb3c6edca7cc1a4f3926746bfa299e1ae515ded8->enter($__internal_3d73af9d501f22066d4a1516eb3c6edca7cc1a4f3926746bfa299e1ae515ded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_3d73af9d501f22066d4a1516eb3c6edca7cc1a4f3926746bfa299e1ae515ded8->leave($__internal_3d73af9d501f22066d4a1516eb3c6edca7cc1a4f3926746bfa299e1ae515ded8_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_077150d33c4474a6b4b82bda8386d8ad4da80afc76d7e33da48c75b403c7cbe2 = $this->env->getExtension("native_profiler");
        $__internal_077150d33c4474a6b4b82bda8386d8ad4da80afc76d7e33da48c75b403c7cbe2->enter($__internal_077150d33c4474a6b4b82bda8386d8ad4da80afc76d7e33da48c75b403c7cbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_077150d33c4474a6b4b82bda8386d8ad4da80afc76d7e33da48c75b403c7cbe2->leave($__internal_077150d33c4474a6b4b82bda8386d8ad4da80afc76d7e33da48c75b403c7cbe2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a67728bd48d7bf8eef13763ec4211524a075aeee9975dd129d5231a8014ed445 = $this->env->getExtension("native_profiler");
        $__internal_a67728bd48d7bf8eef13763ec4211524a075aeee9975dd129d5231a8014ed445->enter($__internal_a67728bd48d7bf8eef13763ec4211524a075aeee9975dd129d5231a8014ed445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a67728bd48d7bf8eef13763ec4211524a075aeee9975dd129d5231a8014ed445->leave($__internal_a67728bd48d7bf8eef13763ec4211524a075aeee9975dd129d5231a8014ed445_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6da29258003cd77499ad6c8b8e9fcf96dbae6c52d4d43fcdbd4bd9fd93293e38 = $this->env->getExtension("native_profiler");
        $__internal_6da29258003cd77499ad6c8b8e9fcf96dbae6c52d4d43fcdbd4bd9fd93293e38->enter($__internal_6da29258003cd77499ad6c8b8e9fcf96dbae6c52d4d43fcdbd4bd9fd93293e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6da29258003cd77499ad6c8b8e9fcf96dbae6c52d4d43fcdbd4bd9fd93293e38->leave($__internal_6da29258003cd77499ad6c8b8e9fcf96dbae6c52d4d43fcdbd4bd9fd93293e38_prof);

    }

    // line 24
    public function block_modal($context, array $blocks = array())
    {
        $__internal_074be8d4281616db079591c4c674baf0163597e6c927b08ce80fa6bdc41dba97 = $this->env->getExtension("native_profiler");
        $__internal_074be8d4281616db079591c4c674baf0163597e6c927b08ce80fa6bdc41dba97->enter($__internal_074be8d4281616db079591c4c674baf0163597e6c927b08ce80fa6bdc41dba97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 25
        echo "        ";
        
        $__internal_074be8d4281616db079591c4c674baf0163597e6c927b08ce80fa6bdc41dba97->leave($__internal_074be8d4281616db079591c4c674baf0163597e6c927b08ce80fa6bdc41dba97_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_1a022849aa3e0528668656fe65ee83118babae91bfb542b244360b6cb048939f = $this->env->getExtension("native_profiler");
        $__internal_1a022849aa3e0528668656fe65ee83118babae91bfb542b244360b6cb048939f->enter($__internal_1a022849aa3e0528668656fe65ee83118babae91bfb542b244360b6cb048939f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "CaogHorariosBundle::layout.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        
        $__internal_1a022849aa3e0528668656fe65ee83118babae91bfb542b244360b6cb048939f->leave($__internal_1a022849aa3e0528668656fe65ee83118babae91bfb542b244360b6cb048939f_prof);

    }

    // line 34
    public function block_alert($context, array $blocks = array())
    {
        $__internal_830d2b606a0d90aac554f7761182f53a2194fa97853754e18931040af58554f0 = $this->env->getExtension("native_profiler");
        $__internal_830d2b606a0d90aac554f7761182f53a2194fa97853754e18931040af58554f0->enter($__internal_830d2b606a0d90aac554f7761182f53a2194fa97853754e18931040af58554f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "CaogHorariosBundle::layout.html.twig", 34)->display($context);
        
        $__internal_830d2b606a0d90aac554f7761182f53a2194fa97853754e18931040af58554f0->leave($__internal_830d2b606a0d90aac554f7761182f53a2194fa97853754e18931040af58554f0_prof);

    }

    // line 35
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_3619cc408a6936a1bf7baea36b5737cfd1317ec9eb1f9c65447112855be63c73 = $this->env->getExtension("native_profiler");
        $__internal_3619cc408a6936a1bf7baea36b5737cfd1317ec9eb1f9c65447112855be63c73->enter($__internal_3619cc408a6936a1bf7baea36b5737cfd1317ec9eb1f9c65447112855be63c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

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
        
        $__internal_3619cc408a6936a1bf7baea36b5737cfd1317ec9eb1f9c65447112855be63c73->leave($__internal_3619cc408a6936a1bf7baea36b5737cfd1317ec9eb1f9c65447112855be63c73_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_c874ffb5d229f04729ab755920eb1ed90c793506ebe181378425187023459fd0 = $this->env->getExtension("native_profiler");
        $__internal_c874ffb5d229f04729ab755920eb1ed90c793506ebe181378425187023459fd0->enter($__internal_c874ffb5d229f04729ab755920eb1ed90c793506ebe181378425187023459fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c874ffb5d229f04729ab755920eb1ed90c793506ebe181378425187023459fd0->leave($__internal_c874ffb5d229f04729ab755920eb1ed90c793506ebe181378425187023459fd0_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fafc364fb0b698bf835af2a5f7ddc95a5d001255ba5004d6312e557f79d9cb03 = $this->env->getExtension("native_profiler");
        $__internal_fafc364fb0b698bf835af2a5f7ddc95a5d001255ba5004d6312e557f79d9cb03->enter($__internal_fafc364fb0b698bf835af2a5f7ddc95a5d001255ba5004d6312e557f79d9cb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "CaogHorariosBundle::layout.html.twig", 46)->display($context);
        // line 47
        echo "            ";
        
        $__internal_fafc364fb0b698bf835af2a5f7ddc95a5d001255ba5004d6312e557f79d9cb03->leave($__internal_fafc364fb0b698bf835af2a5f7ddc95a5d001255ba5004d6312e557f79d9cb03_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle::layout.html.twig";
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

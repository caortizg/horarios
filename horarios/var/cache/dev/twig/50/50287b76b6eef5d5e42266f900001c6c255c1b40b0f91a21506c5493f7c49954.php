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
        $__internal_eae0dd56d97edc754e6dd9e4c2ae9f29c5b6dd126927ee0a5f57c2b28c719d94 = $this->env->getExtension("native_profiler");
        $__internal_eae0dd56d97edc754e6dd9e4c2ae9f29c5b6dd126927ee0a5f57c2b28c719d94->enter($__internal_eae0dd56d97edc754e6dd9e4c2ae9f29c5b6dd126927ee0a5f57c2b28c719d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/layout.html.twig"));

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
        
        $__internal_eae0dd56d97edc754e6dd9e4c2ae9f29c5b6dd126927ee0a5f57c2b28c719d94->leave($__internal_eae0dd56d97edc754e6dd9e4c2ae9f29c5b6dd126927ee0a5f57c2b28c719d94_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d479e1c72fa8793f4dd1bd716d7e706b3102043ef23ed443e68f47dfa5fa6ea7 = $this->env->getExtension("native_profiler");
        $__internal_d479e1c72fa8793f4dd1bd716d7e706b3102043ef23ed443e68f47dfa5fa6ea7->enter($__internal_d479e1c72fa8793f4dd1bd716d7e706b3102043ef23ed443e68f47dfa5fa6ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_d479e1c72fa8793f4dd1bd716d7e706b3102043ef23ed443e68f47dfa5fa6ea7->leave($__internal_d479e1c72fa8793f4dd1bd716d7e706b3102043ef23ed443e68f47dfa5fa6ea7_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_4623d1b462a7bc112575c7b7044cc488b047d7cd57828e96722e9161589ce531 = $this->env->getExtension("native_profiler");
        $__internal_4623d1b462a7bc112575c7b7044cc488b047d7cd57828e96722e9161589ce531->enter($__internal_4623d1b462a7bc112575c7b7044cc488b047d7cd57828e96722e9161589ce531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_4623d1b462a7bc112575c7b7044cc488b047d7cd57828e96722e9161589ce531->leave($__internal_4623d1b462a7bc112575c7b7044cc488b047d7cd57828e96722e9161589ce531_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8312b299f0a4c5de9416a61d191f5727e6276c741e0246d67999e39a84adbd7f = $this->env->getExtension("native_profiler");
        $__internal_8312b299f0a4c5de9416a61d191f5727e6276c741e0246d67999e39a84adbd7f->enter($__internal_8312b299f0a4c5de9416a61d191f5727e6276c741e0246d67999e39a84adbd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_8312b299f0a4c5de9416a61d191f5727e6276c741e0246d67999e39a84adbd7f->leave($__internal_8312b299f0a4c5de9416a61d191f5727e6276c741e0246d67999e39a84adbd7f_prof);

    }

    // line 17
    public function block_modal($context, array $blocks = array())
    {
        $__internal_b0e8ee8ead040ccac7475519b1a64649f19ce960c09f35b834d37584e08cca72 = $this->env->getExtension("native_profiler");
        $__internal_b0e8ee8ead040ccac7475519b1a64649f19ce960c09f35b834d37584e08cca72->enter($__internal_b0e8ee8ead040ccac7475519b1a64649f19ce960c09f35b834d37584e08cca72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 18
        echo "        ";
        
        $__internal_b0e8ee8ead040ccac7475519b1a64649f19ce960c09f35b834d37584e08cca72->leave($__internal_b0e8ee8ead040ccac7475519b1a64649f19ce960c09f35b834d37584e08cca72_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_facd75cef59775c44d935673091d33f84e07ce438a285649db96af18a6471184 = $this->env->getExtension("native_profiler");
        $__internal_facd75cef59775c44d935673091d33f84e07ce438a285649db96af18a6471184->enter($__internal_facd75cef59775c44d935673091d33f84e07ce438a285649db96af18a6471184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "@CaogHorarios/layout.html.twig", 21)->display($context);
        // line 22
        echo "            ";
        
        $__internal_facd75cef59775c44d935673091d33f84e07ce438a285649db96af18a6471184->leave($__internal_facd75cef59775c44d935673091d33f84e07ce438a285649db96af18a6471184_prof);

    }

    // line 27
    public function block_alert($context, array $blocks = array())
    {
        $__internal_ab197f5d5df722fa2f0f1a7c8ed28880691349746b249f7173649fafb1c7e8af = $this->env->getExtension("native_profiler");
        $__internal_ab197f5d5df722fa2f0f1a7c8ed28880691349746b249f7173649fafb1c7e8af->enter($__internal_ab197f5d5df722fa2f0f1a7c8ed28880691349746b249f7173649fafb1c7e8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "@CaogHorarios/layout.html.twig", 27)->display($context);
        
        $__internal_ab197f5d5df722fa2f0f1a7c8ed28880691349746b249f7173649fafb1c7e8af->leave($__internal_ab197f5d5df722fa2f0f1a7c8ed28880691349746b249f7173649fafb1c7e8af_prof);

    }

    // line 28
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_c93bf9c4a3898aef4da6656d97bfb54f44a8dba4c79915e584b6a3e3dc16d317 = $this->env->getExtension("native_profiler");
        $__internal_c93bf9c4a3898aef4da6656d97bfb54f44a8dba4c79915e584b6a3e3dc16d317->enter($__internal_c93bf9c4a3898aef4da6656d97bfb54f44a8dba4c79915e584b6a3e3dc16d317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

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
        
        $__internal_c93bf9c4a3898aef4da6656d97bfb54f44a8dba4c79915e584b6a3e3dc16d317->leave($__internal_c93bf9c4a3898aef4da6656d97bfb54f44a8dba4c79915e584b6a3e3dc16d317_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_58a03b7b3b49879d2d560e94b9615926ec0368bb41230f0a79e868c58080d3af = $this->env->getExtension("native_profiler");
        $__internal_58a03b7b3b49879d2d560e94b9615926ec0368bb41230f0a79e868c58080d3af->enter($__internal_58a03b7b3b49879d2d560e94b9615926ec0368bb41230f0a79e868c58080d3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58a03b7b3b49879d2d560e94b9615926ec0368bb41230f0a79e868c58080d3af->leave($__internal_58a03b7b3b49879d2d560e94b9615926ec0368bb41230f0a79e868c58080d3af_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b83e9298b9da4a59b244d37b28fe7ece3f0bed4a14ad1ebc6e5d419067b7a65e = $this->env->getExtension("native_profiler");
        $__internal_b83e9298b9da4a59b244d37b28fe7ece3f0bed4a14ad1ebc6e5d419067b7a65e->enter($__internal_b83e9298b9da4a59b244d37b28fe7ece3f0bed4a14ad1ebc6e5d419067b7a65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 39
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "@CaogHorarios/layout.html.twig", 39)->display($context);
        // line 40
        echo "            ";
        
        $__internal_b83e9298b9da4a59b244d37b28fe7ece3f0bed4a14ad1ebc6e5d419067b7a65e->leave($__internal_b83e9298b9da4a59b244d37b28fe7ece3f0bed4a14ad1ebc6e5d419067b7a65e_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4bbd88f2448fb06645fe3db68fe2473d78254cfd3242de5eb9c90e5fc79e10b2 = $this->env->getExtension("native_profiler");
        $__internal_4bbd88f2448fb06645fe3db68fe2473d78254cfd3242de5eb9c90e5fc79e10b2->enter($__internal_4bbd88f2448fb06645fe3db68fe2473d78254cfd3242de5eb9c90e5fc79e10b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_4bbd88f2448fb06645fe3db68fe2473d78254cfd3242de5eb9c90e5fc79e10b2->leave($__internal_4bbd88f2448fb06645fe3db68fe2473d78254cfd3242de5eb9c90e5fc79e10b2_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/layout.html.twig";
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

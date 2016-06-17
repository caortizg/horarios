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
        $__internal_8f1a028ab0b6592f6d021ef01e2ed974989546658818c872badc0bbf0f5bcb3a = $this->env->getExtension("native_profiler");
        $__internal_8f1a028ab0b6592f6d021ef01e2ed974989546658818c872badc0bbf0f5bcb3a->enter($__internal_8f1a028ab0b6592f6d021ef01e2ed974989546658818c872badc0bbf0f5bcb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::layout.html.twig"));

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
        
        $__internal_8f1a028ab0b6592f6d021ef01e2ed974989546658818c872badc0bbf0f5bcb3a->leave($__internal_8f1a028ab0b6592f6d021ef01e2ed974989546658818c872badc0bbf0f5bcb3a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8ff8db8d839eb192044080ee530e369e9e821b6115ae230890559c4bfde2dfc = $this->env->getExtension("native_profiler");
        $__internal_d8ff8db8d839eb192044080ee530e369e9e821b6115ae230890559c4bfde2dfc->enter($__internal_d8ff8db8d839eb192044080ee530e369e9e821b6115ae230890559c4bfde2dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_d8ff8db8d839eb192044080ee530e369e9e821b6115ae230890559c4bfde2dfc->leave($__internal_d8ff8db8d839eb192044080ee530e369e9e821b6115ae230890559c4bfde2dfc_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_660227154b9d3e76233b546b13291ac0f18efce9cefc8729e8f6156231a3d6c0 = $this->env->getExtension("native_profiler");
        $__internal_660227154b9d3e76233b546b13291ac0f18efce9cefc8729e8f6156231a3d6c0->enter($__internal_660227154b9d3e76233b546b13291ac0f18efce9cefc8729e8f6156231a3d6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_660227154b9d3e76233b546b13291ac0f18efce9cefc8729e8f6156231a3d6c0->leave($__internal_660227154b9d3e76233b546b13291ac0f18efce9cefc8729e8f6156231a3d6c0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f0e8b4ad0ca4a6f6b3377db8f07ccf0951b138a58ac61d42616b69ca3d8c8dc = $this->env->getExtension("native_profiler");
        $__internal_2f0e8b4ad0ca4a6f6b3377db8f07ccf0951b138a58ac61d42616b69ca3d8c8dc->enter($__internal_2f0e8b4ad0ca4a6f6b3377db8f07ccf0951b138a58ac61d42616b69ca3d8c8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_2f0e8b4ad0ca4a6f6b3377db8f07ccf0951b138a58ac61d42616b69ca3d8c8dc->leave($__internal_2f0e8b4ad0ca4a6f6b3377db8f07ccf0951b138a58ac61d42616b69ca3d8c8dc_prof);

    }

    // line 17
    public function block_modal($context, array $blocks = array())
    {
        $__internal_238264eaab9de38c7ff802f2b56cf435cfe0da0ba98caa683a52b49777467e3a = $this->env->getExtension("native_profiler");
        $__internal_238264eaab9de38c7ff802f2b56cf435cfe0da0ba98caa683a52b49777467e3a->enter($__internal_238264eaab9de38c7ff802f2b56cf435cfe0da0ba98caa683a52b49777467e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 18
        echo "        ";
        
        $__internal_238264eaab9de38c7ff802f2b56cf435cfe0da0ba98caa683a52b49777467e3a->leave($__internal_238264eaab9de38c7ff802f2b56cf435cfe0da0ba98caa683a52b49777467e3a_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_3b11cc643c787b51d76ae33468b137dd1cee7442cbe1cea6a38df4ed82201e21 = $this->env->getExtension("native_profiler");
        $__internal_3b11cc643c787b51d76ae33468b137dd1cee7442cbe1cea6a38df4ed82201e21->enter($__internal_3b11cc643c787b51d76ae33468b137dd1cee7442cbe1cea6a38df4ed82201e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "CaogHorariosBundle::layout.html.twig", 21)->display($context);
        // line 22
        echo "            ";
        
        $__internal_3b11cc643c787b51d76ae33468b137dd1cee7442cbe1cea6a38df4ed82201e21->leave($__internal_3b11cc643c787b51d76ae33468b137dd1cee7442cbe1cea6a38df4ed82201e21_prof);

    }

    // line 27
    public function block_alert($context, array $blocks = array())
    {
        $__internal_0a563452a99df2e4e49d05c10d12171f4d5c8a17992d931da85002c9e972c900 = $this->env->getExtension("native_profiler");
        $__internal_0a563452a99df2e4e49d05c10d12171f4d5c8a17992d931da85002c9e972c900->enter($__internal_0a563452a99df2e4e49d05c10d12171f4d5c8a17992d931da85002c9e972c900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "CaogHorariosBundle::layout.html.twig", 27)->display($context);
        
        $__internal_0a563452a99df2e4e49d05c10d12171f4d5c8a17992d931da85002c9e972c900->leave($__internal_0a563452a99df2e4e49d05c10d12171f4d5c8a17992d931da85002c9e972c900_prof);

    }

    // line 28
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_f7624d01ec946ab6db5255fae80e3900fe5f65657c77aeea64434b20925f8ed2 = $this->env->getExtension("native_profiler");
        $__internal_f7624d01ec946ab6db5255fae80e3900fe5f65657c77aeea64434b20925f8ed2->enter($__internal_f7624d01ec946ab6db5255fae80e3900fe5f65657c77aeea64434b20925f8ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

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
        
        $__internal_f7624d01ec946ab6db5255fae80e3900fe5f65657c77aeea64434b20925f8ed2->leave($__internal_f7624d01ec946ab6db5255fae80e3900fe5f65657c77aeea64434b20925f8ed2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb38e3b5c0a881aff858128c196b91fc72f2bc1417b5c62fa9612c5146823d62 = $this->env->getExtension("native_profiler");
        $__internal_bb38e3b5c0a881aff858128c196b91fc72f2bc1417b5c62fa9612c5146823d62->enter($__internal_bb38e3b5c0a881aff858128c196b91fc72f2bc1417b5c62fa9612c5146823d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb38e3b5c0a881aff858128c196b91fc72f2bc1417b5c62fa9612c5146823d62->leave($__internal_bb38e3b5c0a881aff858128c196b91fc72f2bc1417b5c62fa9612c5146823d62_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_53f1920f2dd49b552fee517d5e52a2ccb6eaf653cb7f07a317bcbed52268987a = $this->env->getExtension("native_profiler");
        $__internal_53f1920f2dd49b552fee517d5e52a2ccb6eaf653cb7f07a317bcbed52268987a->enter($__internal_53f1920f2dd49b552fee517d5e52a2ccb6eaf653cb7f07a317bcbed52268987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 39
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "CaogHorariosBundle::layout.html.twig", 39)->display($context);
        // line 40
        echo "            ";
        
        $__internal_53f1920f2dd49b552fee517d5e52a2ccb6eaf653cb7f07a317bcbed52268987a->leave($__internal_53f1920f2dd49b552fee517d5e52a2ccb6eaf653cb7f07a317bcbed52268987a_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0eb3338698241d5955b0fa364efe14f7120278eb455e3c55156d7ce3c01fa35 = $this->env->getExtension("native_profiler");
        $__internal_e0eb3338698241d5955b0fa364efe14f7120278eb455e3c55156d7ce3c01fa35->enter($__internal_e0eb3338698241d5955b0fa364efe14f7120278eb455e3c55156d7ce3c01fa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_e0eb3338698241d5955b0fa364efe14f7120278eb455e3c55156d7ce3c01fa35->leave($__internal_e0eb3338698241d5955b0fa364efe14f7120278eb455e3c55156d7ce3c01fa35_prof);

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

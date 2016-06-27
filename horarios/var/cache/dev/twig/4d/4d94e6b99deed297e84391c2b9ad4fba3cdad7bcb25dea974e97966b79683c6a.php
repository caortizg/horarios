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
        $__internal_051a98f41327a8ec5e98194aa66c86c81990a52caa4e3ae101701a4b2dcbfac2 = $this->env->getExtension("native_profiler");
        $__internal_051a98f41327a8ec5e98194aa66c86c81990a52caa4e3ae101701a4b2dcbfac2->enter($__internal_051a98f41327a8ec5e98194aa66c86c81990a52caa4e3ae101701a4b2dcbfac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::layout.html.twig"));

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
        
        $__internal_051a98f41327a8ec5e98194aa66c86c81990a52caa4e3ae101701a4b2dcbfac2->leave($__internal_051a98f41327a8ec5e98194aa66c86c81990a52caa4e3ae101701a4b2dcbfac2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a34823198b4f83214c142ae29695617039fcc02e449056412ce3002802f69260 = $this->env->getExtension("native_profiler");
        $__internal_a34823198b4f83214c142ae29695617039fcc02e449056412ce3002802f69260->enter($__internal_a34823198b4f83214c142ae29695617039fcc02e449056412ce3002802f69260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_a34823198b4f83214c142ae29695617039fcc02e449056412ce3002802f69260->leave($__internal_a34823198b4f83214c142ae29695617039fcc02e449056412ce3002802f69260_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_b21541f0159350ec73dc1c23c1223cb4137fe0d26e96752c59c117dbb47a37bf = $this->env->getExtension("native_profiler");
        $__internal_b21541f0159350ec73dc1c23c1223cb4137fe0d26e96752c59c117dbb47a37bf->enter($__internal_b21541f0159350ec73dc1c23c1223cb4137fe0d26e96752c59c117dbb47a37bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_b21541f0159350ec73dc1c23c1223cb4137fe0d26e96752c59c117dbb47a37bf->leave($__internal_b21541f0159350ec73dc1c23c1223cb4137fe0d26e96752c59c117dbb47a37bf_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64f6cc58a1e4310d86b1f34e83d4f94e18082224d34f109d248c922a1204be4a = $this->env->getExtension("native_profiler");
        $__internal_64f6cc58a1e4310d86b1f34e83d4f94e18082224d34f109d248c922a1204be4a->enter($__internal_64f6cc58a1e4310d86b1f34e83d4f94e18082224d34f109d248c922a1204be4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_64f6cc58a1e4310d86b1f34e83d4f94e18082224d34f109d248c922a1204be4a->leave($__internal_64f6cc58a1e4310d86b1f34e83d4f94e18082224d34f109d248c922a1204be4a_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c98c0cd6729222646639e38fed7250e9f2e1b37b2a2e73bcfe4523cba119edec = $this->env->getExtension("native_profiler");
        $__internal_c98c0cd6729222646639e38fed7250e9f2e1b37b2a2e73bcfe4523cba119edec->enter($__internal_c98c0cd6729222646639e38fed7250e9f2e1b37b2a2e73bcfe4523cba119edec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c98c0cd6729222646639e38fed7250e9f2e1b37b2a2e73bcfe4523cba119edec->leave($__internal_c98c0cd6729222646639e38fed7250e9f2e1b37b2a2e73bcfe4523cba119edec_prof);

    }

    // line 24
    public function block_modal($context, array $blocks = array())
    {
        $__internal_ed465fb39ae358e20ab95596f916abd187be805e01979f588f0d3d638f7185fd = $this->env->getExtension("native_profiler");
        $__internal_ed465fb39ae358e20ab95596f916abd187be805e01979f588f0d3d638f7185fd->enter($__internal_ed465fb39ae358e20ab95596f916abd187be805e01979f588f0d3d638f7185fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 25
        echo "        ";
        
        $__internal_ed465fb39ae358e20ab95596f916abd187be805e01979f588f0d3d638f7185fd->leave($__internal_ed465fb39ae358e20ab95596f916abd187be805e01979f588f0d3d638f7185fd_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_835f3848b7f54b8e502753935eff9c5ea2363b48b79c4c50997d11ba0cd0a6ce = $this->env->getExtension("native_profiler");
        $__internal_835f3848b7f54b8e502753935eff9c5ea2363b48b79c4c50997d11ba0cd0a6ce->enter($__internal_835f3848b7f54b8e502753935eff9c5ea2363b48b79c4c50997d11ba0cd0a6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "CaogHorariosBundle::layout.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        
        $__internal_835f3848b7f54b8e502753935eff9c5ea2363b48b79c4c50997d11ba0cd0a6ce->leave($__internal_835f3848b7f54b8e502753935eff9c5ea2363b48b79c4c50997d11ba0cd0a6ce_prof);

    }

    // line 34
    public function block_alert($context, array $blocks = array())
    {
        $__internal_74ac14072af62997aab4d3611e4b766f82b0704577386a0c69d973de5508f7f3 = $this->env->getExtension("native_profiler");
        $__internal_74ac14072af62997aab4d3611e4b766f82b0704577386a0c69d973de5508f7f3->enter($__internal_74ac14072af62997aab4d3611e4b766f82b0704577386a0c69d973de5508f7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "CaogHorariosBundle::layout.html.twig", 34)->display($context);
        
        $__internal_74ac14072af62997aab4d3611e4b766f82b0704577386a0c69d973de5508f7f3->leave($__internal_74ac14072af62997aab4d3611e4b766f82b0704577386a0c69d973de5508f7f3_prof);

    }

    // line 35
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_4868180b228bdc44afebf00111c26ace6bf7f16265ec8ea9e106ebbd52eef649 = $this->env->getExtension("native_profiler");
        $__internal_4868180b228bdc44afebf00111c26ace6bf7f16265ec8ea9e106ebbd52eef649->enter($__internal_4868180b228bdc44afebf00111c26ace6bf7f16265ec8ea9e106ebbd52eef649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

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
        
        $__internal_4868180b228bdc44afebf00111c26ace6bf7f16265ec8ea9e106ebbd52eef649->leave($__internal_4868180b228bdc44afebf00111c26ace6bf7f16265ec8ea9e106ebbd52eef649_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7e6dca396952ffdb7e1185bb4901d1d64730cbfec3265b7986a17284b557da6 = $this->env->getExtension("native_profiler");
        $__internal_f7e6dca396952ffdb7e1185bb4901d1d64730cbfec3265b7986a17284b557da6->enter($__internal_f7e6dca396952ffdb7e1185bb4901d1d64730cbfec3265b7986a17284b557da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f7e6dca396952ffdb7e1185bb4901d1d64730cbfec3265b7986a17284b557da6->leave($__internal_f7e6dca396952ffdb7e1185bb4901d1d64730cbfec3265b7986a17284b557da6_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f29362ca18ce20b14dd3dcfb36cfe5bce94ba2d28dcf9756dd1f9d5e82adccdd = $this->env->getExtension("native_profiler");
        $__internal_f29362ca18ce20b14dd3dcfb36cfe5bce94ba2d28dcf9756dd1f9d5e82adccdd->enter($__internal_f29362ca18ce20b14dd3dcfb36cfe5bce94ba2d28dcf9756dd1f9d5e82adccdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "CaogHorariosBundle::layout.html.twig", 46)->display($context);
        // line 47
        echo "            ";
        
        $__internal_f29362ca18ce20b14dd3dcfb36cfe5bce94ba2d28dcf9756dd1f9d5e82adccdd->leave($__internal_f29362ca18ce20b14dd3dcfb36cfe5bce94ba2d28dcf9756dd1f9d5e82adccdd_prof);

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

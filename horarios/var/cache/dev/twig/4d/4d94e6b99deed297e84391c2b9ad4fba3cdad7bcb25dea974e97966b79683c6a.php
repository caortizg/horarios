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
        $__internal_12cbf011e079ee29670934cfa2cf8cc31847ae4530c80218fcb42fc8eefb5758 = $this->env->getExtension("native_profiler");
        $__internal_12cbf011e079ee29670934cfa2cf8cc31847ae4530c80218fcb42fc8eefb5758->enter($__internal_12cbf011e079ee29670934cfa2cf8cc31847ae4530c80218fcb42fc8eefb5758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::layout.html.twig"));

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
        // line 19
        echo "    </head>

    <body>        
        ";
        // line 22
        $this->displayBlock('modal', $context, $blocks);
        // line 24
        echo "        <div class=\"row\">     
            ";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "            
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\"></div>
            <div class=\"col-md-8\"> 
            ";
        // line 32
        $this->displayBlock('alert', $context, $blocks);
        // line 33
        echo "            ";
        $this->displayBlock('titleBody', $context, $blocks);
        // line 38
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "            </div>
            <div class=\"col-md-2\"></div>            
        </div>
        <div class=\"row\">
            ";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "        </div>
        
    </body>
</html>";
        
        $__internal_12cbf011e079ee29670934cfa2cf8cc31847ae4530c80218fcb42fc8eefb5758->leave($__internal_12cbf011e079ee29670934cfa2cf8cc31847ae4530c80218fcb42fc8eefb5758_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd2629bb20964c2c8d1f27e2bf288370fb685295bec7d30c2a45a690ff5e4513 = $this->env->getExtension("native_profiler");
        $__internal_bd2629bb20964c2c8d1f27e2bf288370fb685295bec7d30c2a45a690ff5e4513->enter($__internal_bd2629bb20964c2c8d1f27e2bf288370fb685295bec7d30c2a45a690ff5e4513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_bd2629bb20964c2c8d1f27e2bf288370fb685295bec7d30c2a45a690ff5e4513->leave($__internal_bd2629bb20964c2c8d1f27e2bf288370fb685295bec7d30c2a45a690ff5e4513_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_49a9dbbfe071914303854a91a6fef9f154c8ed68861f7225deef7a964ed1daa9 = $this->env->getExtension("native_profiler");
        $__internal_49a9dbbfe071914303854a91a6fef9f154c8ed68861f7225deef7a964ed1daa9->enter($__internal_49a9dbbfe071914303854a91a6fef9f154c8ed68861f7225deef7a964ed1daa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_49a9dbbfe071914303854a91a6fef9f154c8ed68861f7225deef7a964ed1daa9->leave($__internal_49a9dbbfe071914303854a91a6fef9f154c8ed68861f7225deef7a964ed1daa9_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76de7eb014c1682a77f9eca8b2370a600942b2286554da7f2fdefc9a447b1a39 = $this->env->getExtension("native_profiler");
        $__internal_76de7eb014c1682a77f9eca8b2370a600942b2286554da7f2fdefc9a447b1a39->enter($__internal_76de7eb014c1682a77f9eca8b2370a600942b2286554da7f2fdefc9a447b1a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_76de7eb014c1682a77f9eca8b2370a600942b2286554da7f2fdefc9a447b1a39->leave($__internal_76de7eb014c1682a77f9eca8b2370a600942b2286554da7f2fdefc9a447b1a39_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4f85ea29e137575ec1cd74df39acf29adbdf49555812def64954f4c48be521a = $this->env->getExtension("native_profiler");
        $__internal_d4f85ea29e137575ec1cd74df39acf29adbdf49555812def64954f4c48be521a->enter($__internal_d4f85ea29e137575ec1cd74df39acf29adbdf49555812def64954f4c48be521a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_d4f85ea29e137575ec1cd74df39acf29adbdf49555812def64954f4c48be521a->leave($__internal_d4f85ea29e137575ec1cd74df39acf29adbdf49555812def64954f4c48be521a_prof);

    }

    // line 22
    public function block_modal($context, array $blocks = array())
    {
        $__internal_2ee4bc1134fedebdc67bdb81a6e7830bb3953e90130a6ba1ab26c0fd0a37a464 = $this->env->getExtension("native_profiler");
        $__internal_2ee4bc1134fedebdc67bdb81a6e7830bb3953e90130a6ba1ab26c0fd0a37a464->enter($__internal_2ee4bc1134fedebdc67bdb81a6e7830bb3953e90130a6ba1ab26c0fd0a37a464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 23
        echo "        ";
        
        $__internal_2ee4bc1134fedebdc67bdb81a6e7830bb3953e90130a6ba1ab26c0fd0a37a464->leave($__internal_2ee4bc1134fedebdc67bdb81a6e7830bb3953e90130a6ba1ab26c0fd0a37a464_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_d0af59c69427f739d661af521e9e35012b9253ad9a46d1483d3247d85e62c3c5 = $this->env->getExtension("native_profiler");
        $__internal_d0af59c69427f739d661af521e9e35012b9253ad9a46d1483d3247d85e62c3c5->enter($__internal_d0af59c69427f739d661af521e9e35012b9253ad9a46d1483d3247d85e62c3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "CaogHorariosBundle::layout.html.twig", 26)->display($context);
        // line 27
        echo "            ";
        
        $__internal_d0af59c69427f739d661af521e9e35012b9253ad9a46d1483d3247d85e62c3c5->leave($__internal_d0af59c69427f739d661af521e9e35012b9253ad9a46d1483d3247d85e62c3c5_prof);

    }

    // line 32
    public function block_alert($context, array $blocks = array())
    {
        $__internal_b02e5828c7b7ef9ff47ba237441478d97868c24c320aa7cf7b12ec7768400c31 = $this->env->getExtension("native_profiler");
        $__internal_b02e5828c7b7ef9ff47ba237441478d97868c24c320aa7cf7b12ec7768400c31->enter($__internal_b02e5828c7b7ef9ff47ba237441478d97868c24c320aa7cf7b12ec7768400c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "CaogHorariosBundle::layout.html.twig", 32)->display($context);
        
        $__internal_b02e5828c7b7ef9ff47ba237441478d97868c24c320aa7cf7b12ec7768400c31->leave($__internal_b02e5828c7b7ef9ff47ba237441478d97868c24c320aa7cf7b12ec7768400c31_prof);

    }

    // line 33
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_3ffa70b3ab45ba8441eeb1f51f80da9645b597fbda7cd91cc4ed62612a2e7889 = $this->env->getExtension("native_profiler");
        $__internal_3ffa70b3ab45ba8441eeb1f51f80da9645b597fbda7cd91cc4ed62612a2e7889->enter($__internal_3ffa70b3ab45ba8441eeb1f51f80da9645b597fbda7cd91cc4ed62612a2e7889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

        // line 34
        echo "                <div class=\"page-header\">
                    <h1>";
        // line 35
        if (array_key_exists("titleBody", $context)) {
            echo twig_escape_filter($this->env, (isset($context["titleBody"]) ? $context["titleBody"] : $this->getContext($context, "titleBody")), "html", null, true);
        } else {
            echo "Horarios";
        }
        echo "</h1>
                </div>
            ";
        
        $__internal_3ffa70b3ab45ba8441eeb1f51f80da9645b597fbda7cd91cc4ed62612a2e7889->leave($__internal_3ffa70b3ab45ba8441eeb1f51f80da9645b597fbda7cd91cc4ed62612a2e7889_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_e65aea41cf478fb6b137e27d9e5fe82e35f0b4ad1cd7e4be1944de7cedd5ee6c = $this->env->getExtension("native_profiler");
        $__internal_e65aea41cf478fb6b137e27d9e5fe82e35f0b4ad1cd7e4be1944de7cedd5ee6c->enter($__internal_e65aea41cf478fb6b137e27d9e5fe82e35f0b4ad1cd7e4be1944de7cedd5ee6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e65aea41cf478fb6b137e27d9e5fe82e35f0b4ad1cd7e4be1944de7cedd5ee6c->leave($__internal_e65aea41cf478fb6b137e27d9e5fe82e35f0b4ad1cd7e4be1944de7cedd5ee6c_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_42188f818f827e065afd5f7c10c25895b3220f072bfdfc2d3737a98d74c1055a = $this->env->getExtension("native_profiler");
        $__internal_42188f818f827e065afd5f7c10c25895b3220f072bfdfc2d3737a98d74c1055a->enter($__internal_42188f818f827e065afd5f7c10c25895b3220f072bfdfc2d3737a98d74c1055a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "CaogHorariosBundle::layout.html.twig", 44)->display($context);
        // line 45
        echo "            ";
        
        $__internal_42188f818f827e065afd5f7c10c25895b3220f072bfdfc2d3737a98d74c1055a->leave($__internal_42188f818f827e065afd5f7c10c25895b3220f072bfdfc2d3737a98d74c1055a_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  250 => 45,  247 => 44,  241 => 43,  230 => 38,  216 => 35,  213 => 34,  207 => 33,  195 => 32,  188 => 27,  185 => 26,  179 => 25,  172 => 23,  166 => 22,  157 => 17,  152 => 16,  146 => 15,  137 => 13,  133 => 12,  128 => 11,  122 => 10,  115 => 9,  109 => 8,  97 => 5,  87 => 46,  85 => 43,  79 => 39,  76 => 38,  73 => 33,  71 => 32,  64 => 27,  62 => 25,  59 => 24,  57 => 22,  52 => 19,  49 => 15,  46 => 10,  44 => 8,  38 => 5,  32 => 1,);
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

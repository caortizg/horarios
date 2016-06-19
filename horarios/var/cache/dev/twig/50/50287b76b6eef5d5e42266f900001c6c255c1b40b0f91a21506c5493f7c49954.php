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
        $__internal_48a2f3b032bfcfcc2df6b42932a956e0bee3c90633e862097ebde9643f12c48c = $this->env->getExtension("native_profiler");
        $__internal_48a2f3b032bfcfcc2df6b42932a956e0bee3c90633e862097ebde9643f12c48c->enter($__internal_48a2f3b032bfcfcc2df6b42932a956e0bee3c90633e862097ebde9643f12c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/layout.html.twig"));

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
        
        $__internal_48a2f3b032bfcfcc2df6b42932a956e0bee3c90633e862097ebde9643f12c48c->leave($__internal_48a2f3b032bfcfcc2df6b42932a956e0bee3c90633e862097ebde9643f12c48c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1341aa5f02039b14ec6fd25e4a848e945022c5c665a97d2014a48fccf601e68d = $this->env->getExtension("native_profiler");
        $__internal_1341aa5f02039b14ec6fd25e4a848e945022c5c665a97d2014a48fccf601e68d->enter($__internal_1341aa5f02039b14ec6fd25e4a848e945022c5c665a97d2014a48fccf601e68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_1341aa5f02039b14ec6fd25e4a848e945022c5c665a97d2014a48fccf601e68d->leave($__internal_1341aa5f02039b14ec6fd25e4a848e945022c5c665a97d2014a48fccf601e68d_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_d203f08697f08cac16328ef2211c257c2611e11b9f1a100f97fecc448c23dc10 = $this->env->getExtension("native_profiler");
        $__internal_d203f08697f08cac16328ef2211c257c2611e11b9f1a100f97fecc448c23dc10->enter($__internal_d203f08697f08cac16328ef2211c257c2611e11b9f1a100f97fecc448c23dc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_d203f08697f08cac16328ef2211c257c2611e11b9f1a100f97fecc448c23dc10->leave($__internal_d203f08697f08cac16328ef2211c257c2611e11b9f1a100f97fecc448c23dc10_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_681fba678569bcaeadda4a73a3fd84c5460947c8c44d6024c22a1de9cb57f00a = $this->env->getExtension("native_profiler");
        $__internal_681fba678569bcaeadda4a73a3fd84c5460947c8c44d6024c22a1de9cb57f00a->enter($__internal_681fba678569bcaeadda4a73a3fd84c5460947c8c44d6024c22a1de9cb57f00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_681fba678569bcaeadda4a73a3fd84c5460947c8c44d6024c22a1de9cb57f00a->leave($__internal_681fba678569bcaeadda4a73a3fd84c5460947c8c44d6024c22a1de9cb57f00a_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_128a79ada3443d23d7e76ec87588a600ef55a195676d1f364f6db4505c47df93 = $this->env->getExtension("native_profiler");
        $__internal_128a79ada3443d23d7e76ec87588a600ef55a195676d1f364f6db4505c47df93->enter($__internal_128a79ada3443d23d7e76ec87588a600ef55a195676d1f364f6db4505c47df93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_128a79ada3443d23d7e76ec87588a600ef55a195676d1f364f6db4505c47df93->leave($__internal_128a79ada3443d23d7e76ec87588a600ef55a195676d1f364f6db4505c47df93_prof);

    }

    // line 22
    public function block_modal($context, array $blocks = array())
    {
        $__internal_b8df743ebf92684379ec621ee44b29a8ee396edc3ad80108dcc8a68e0ec7facc = $this->env->getExtension("native_profiler");
        $__internal_b8df743ebf92684379ec621ee44b29a8ee396edc3ad80108dcc8a68e0ec7facc->enter($__internal_b8df743ebf92684379ec621ee44b29a8ee396edc3ad80108dcc8a68e0ec7facc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 23
        echo "        ";
        
        $__internal_b8df743ebf92684379ec621ee44b29a8ee396edc3ad80108dcc8a68e0ec7facc->leave($__internal_b8df743ebf92684379ec621ee44b29a8ee396edc3ad80108dcc8a68e0ec7facc_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_2f78faf302f38f8d8115c4c356fd8907e39620e47371dff7982f9a63fd423b1b = $this->env->getExtension("native_profiler");
        $__internal_2f78faf302f38f8d8115c4c356fd8907e39620e47371dff7982f9a63fd423b1b->enter($__internal_2f78faf302f38f8d8115c4c356fd8907e39620e47371dff7982f9a63fd423b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "@CaogHorarios/layout.html.twig", 26)->display($context);
        // line 27
        echo "            ";
        
        $__internal_2f78faf302f38f8d8115c4c356fd8907e39620e47371dff7982f9a63fd423b1b->leave($__internal_2f78faf302f38f8d8115c4c356fd8907e39620e47371dff7982f9a63fd423b1b_prof);

    }

    // line 32
    public function block_alert($context, array $blocks = array())
    {
        $__internal_7972d0228f5a57cb297c386e18e726f5d01c859b11b1009d4bb2edb13eceebf4 = $this->env->getExtension("native_profiler");
        $__internal_7972d0228f5a57cb297c386e18e726f5d01c859b11b1009d4bb2edb13eceebf4->enter($__internal_7972d0228f5a57cb297c386e18e726f5d01c859b11b1009d4bb2edb13eceebf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "@CaogHorarios/layout.html.twig", 32)->display($context);
        
        $__internal_7972d0228f5a57cb297c386e18e726f5d01c859b11b1009d4bb2edb13eceebf4->leave($__internal_7972d0228f5a57cb297c386e18e726f5d01c859b11b1009d4bb2edb13eceebf4_prof);

    }

    // line 33
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_a2e41181718f2b0bf82d09a4f040eef99c78f300bd86cb7809ae0f928036f619 = $this->env->getExtension("native_profiler");
        $__internal_a2e41181718f2b0bf82d09a4f040eef99c78f300bd86cb7809ae0f928036f619->enter($__internal_a2e41181718f2b0bf82d09a4f040eef99c78f300bd86cb7809ae0f928036f619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

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
        
        $__internal_a2e41181718f2b0bf82d09a4f040eef99c78f300bd86cb7809ae0f928036f619->leave($__internal_a2e41181718f2b0bf82d09a4f040eef99c78f300bd86cb7809ae0f928036f619_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_d47ee4740bae52e0602079dfbf8c94e7910e5bacf4ad7eff5e1accb5d2b5abf9 = $this->env->getExtension("native_profiler");
        $__internal_d47ee4740bae52e0602079dfbf8c94e7910e5bacf4ad7eff5e1accb5d2b5abf9->enter($__internal_d47ee4740bae52e0602079dfbf8c94e7910e5bacf4ad7eff5e1accb5d2b5abf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d47ee4740bae52e0602079dfbf8c94e7910e5bacf4ad7eff5e1accb5d2b5abf9->leave($__internal_d47ee4740bae52e0602079dfbf8c94e7910e5bacf4ad7eff5e1accb5d2b5abf9_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4a28fa0a04cdd366bceaa5ccb5158aa2698b7b16d6f3b7e3d8cae2a862f3a668 = $this->env->getExtension("native_profiler");
        $__internal_4a28fa0a04cdd366bceaa5ccb5158aa2698b7b16d6f3b7e3d8cae2a862f3a668->enter($__internal_4a28fa0a04cdd366bceaa5ccb5158aa2698b7b16d6f3b7e3d8cae2a862f3a668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "@CaogHorarios/layout.html.twig", 44)->display($context);
        // line 45
        echo "            ";
        
        $__internal_4a28fa0a04cdd366bceaa5ccb5158aa2698b7b16d6f3b7e3d8cae2a862f3a668->leave($__internal_4a28fa0a04cdd366bceaa5ccb5158aa2698b7b16d6f3b7e3d8cae2a862f3a668_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/layout.html.twig";
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

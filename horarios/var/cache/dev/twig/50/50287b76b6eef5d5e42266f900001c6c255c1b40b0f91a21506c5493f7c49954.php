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
        $__internal_09b25100bd1d7206e93a733b2cf3747e30aa2d40b2b0dead43fd76944c4d247a = $this->env->getExtension("native_profiler");
        $__internal_09b25100bd1d7206e93a733b2cf3747e30aa2d40b2b0dead43fd76944c4d247a->enter($__internal_09b25100bd1d7206e93a733b2cf3747e30aa2d40b2b0dead43fd76944c4d247a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/layout.html.twig"));

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
        
        $__internal_09b25100bd1d7206e93a733b2cf3747e30aa2d40b2b0dead43fd76944c4d247a->leave($__internal_09b25100bd1d7206e93a733b2cf3747e30aa2d40b2b0dead43fd76944c4d247a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e75b978d394db449dc74c46a61de8f0f2337ba798efd35e8e7971b6fbc2f7d0 = $this->env->getExtension("native_profiler");
        $__internal_9e75b978d394db449dc74c46a61de8f0f2337ba798efd35e8e7971b6fbc2f7d0->enter($__internal_9e75b978d394db449dc74c46a61de8f0f2337ba798efd35e8e7971b6fbc2f7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_9e75b978d394db449dc74c46a61de8f0f2337ba798efd35e8e7971b6fbc2f7d0->leave($__internal_9e75b978d394db449dc74c46a61de8f0f2337ba798efd35e8e7971b6fbc2f7d0_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d65694d8fb1e9667796aef64959a2d5edeedd6fa46cf35e6aec9474fc577e83 = $this->env->getExtension("native_profiler");
        $__internal_7d65694d8fb1e9667796aef64959a2d5edeedd6fa46cf35e6aec9474fc577e83->enter($__internal_7d65694d8fb1e9667796aef64959a2d5edeedd6fa46cf35e6aec9474fc577e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_7d65694d8fb1e9667796aef64959a2d5edeedd6fa46cf35e6aec9474fc577e83->leave($__internal_7d65694d8fb1e9667796aef64959a2d5edeedd6fa46cf35e6aec9474fc577e83_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_14af92f74ffd44d66f6bb2efc5d582dc41c9e290e2bd1e80192ddc2da5be675f = $this->env->getExtension("native_profiler");
        $__internal_14af92f74ffd44d66f6bb2efc5d582dc41c9e290e2bd1e80192ddc2da5be675f->enter($__internal_14af92f74ffd44d66f6bb2efc5d582dc41c9e290e2bd1e80192ddc2da5be675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_14af92f74ffd44d66f6bb2efc5d582dc41c9e290e2bd1e80192ddc2da5be675f->leave($__internal_14af92f74ffd44d66f6bb2efc5d582dc41c9e290e2bd1e80192ddc2da5be675f_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9db77feebec31dd23434f212b1663568cb4385fb809a8f6ce38baad13594641b = $this->env->getExtension("native_profiler");
        $__internal_9db77feebec31dd23434f212b1663568cb4385fb809a8f6ce38baad13594641b->enter($__internal_9db77feebec31dd23434f212b1663568cb4385fb809a8f6ce38baad13594641b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9db77feebec31dd23434f212b1663568cb4385fb809a8f6ce38baad13594641b->leave($__internal_9db77feebec31dd23434f212b1663568cb4385fb809a8f6ce38baad13594641b_prof);

    }

    // line 23
    public function block_modal($context, array $blocks = array())
    {
        $__internal_bd211e780d7c3d506809d9a9010483580fd17622df88b06f7bd6cb1cc2089c42 = $this->env->getExtension("native_profiler");
        $__internal_bd211e780d7c3d506809d9a9010483580fd17622df88b06f7bd6cb1cc2089c42->enter($__internal_bd211e780d7c3d506809d9a9010483580fd17622df88b06f7bd6cb1cc2089c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 24
        echo "        ";
        
        $__internal_bd211e780d7c3d506809d9a9010483580fd17622df88b06f7bd6cb1cc2089c42->leave($__internal_bd211e780d7c3d506809d9a9010483580fd17622df88b06f7bd6cb1cc2089c42_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_843a5ae7823252e029dadb4b2bd9da98c51bd75ad113bcfa3e1d32a01a0ce111 = $this->env->getExtension("native_profiler");
        $__internal_843a5ae7823252e029dadb4b2bd9da98c51bd75ad113bcfa3e1d32a01a0ce111->enter($__internal_843a5ae7823252e029dadb4b2bd9da98c51bd75ad113bcfa3e1d32a01a0ce111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "@CaogHorarios/layout.html.twig", 27)->display($context);
        // line 28
        echo "            ";
        
        $__internal_843a5ae7823252e029dadb4b2bd9da98c51bd75ad113bcfa3e1d32a01a0ce111->leave($__internal_843a5ae7823252e029dadb4b2bd9da98c51bd75ad113bcfa3e1d32a01a0ce111_prof);

    }

    // line 33
    public function block_alert($context, array $blocks = array())
    {
        $__internal_a45f3dac9812b9c6098a6f7d4ad604533fde20d8cab19e6832e20574adbd3e8e = $this->env->getExtension("native_profiler");
        $__internal_a45f3dac9812b9c6098a6f7d4ad604533fde20d8cab19e6832e20574adbd3e8e->enter($__internal_a45f3dac9812b9c6098a6f7d4ad604533fde20d8cab19e6832e20574adbd3e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "@CaogHorarios/layout.html.twig", 33)->display($context);
        
        $__internal_a45f3dac9812b9c6098a6f7d4ad604533fde20d8cab19e6832e20574adbd3e8e->leave($__internal_a45f3dac9812b9c6098a6f7d4ad604533fde20d8cab19e6832e20574adbd3e8e_prof);

    }

    // line 34
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_84b6058dd6363faf0aa595e48b87849311c7176c36a58f57612ee805869e444a = $this->env->getExtension("native_profiler");
        $__internal_84b6058dd6363faf0aa595e48b87849311c7176c36a58f57612ee805869e444a->enter($__internal_84b6058dd6363faf0aa595e48b87849311c7176c36a58f57612ee805869e444a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

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
        
        $__internal_84b6058dd6363faf0aa595e48b87849311c7176c36a58f57612ee805869e444a->leave($__internal_84b6058dd6363faf0aa595e48b87849311c7176c36a58f57612ee805869e444a_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_be5df4f317f0df735eaca2035d70f726b8be671d41194ed3dce716cd26616506 = $this->env->getExtension("native_profiler");
        $__internal_be5df4f317f0df735eaca2035d70f726b8be671d41194ed3dce716cd26616506->enter($__internal_be5df4f317f0df735eaca2035d70f726b8be671d41194ed3dce716cd26616506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be5df4f317f0df735eaca2035d70f726b8be671d41194ed3dce716cd26616506->leave($__internal_be5df4f317f0df735eaca2035d70f726b8be671d41194ed3dce716cd26616506_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bc854eca5eefa13706e984b2eb75a59c8b126ca1bbe798917081b13264723db4 = $this->env->getExtension("native_profiler");
        $__internal_bc854eca5eefa13706e984b2eb75a59c8b126ca1bbe798917081b13264723db4->enter($__internal_bc854eca5eefa13706e984b2eb75a59c8b126ca1bbe798917081b13264723db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 45
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "@CaogHorarios/layout.html.twig", 45)->display($context);
        // line 46
        echo "            ";
        
        $__internal_bc854eca5eefa13706e984b2eb75a59c8b126ca1bbe798917081b13264723db4->leave($__internal_bc854eca5eefa13706e984b2eb75a59c8b126ca1bbe798917081b13264723db4_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/layout.html.twig";
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

<?php

/* base.html.twig */
class __TwigTemplate_6204e9542afbc8296602e2cd42d99ff6183b84193197bd581653808e11f0bc03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_669a3870d56ec2f780a1b2a8ed6cc327f5356d2c982d79e00d09f0067b285e44 = $this->env->getExtension("native_profiler");
        $__internal_669a3870d56ec2f780a1b2a8ed6cc327f5356d2c982d79e00d09f0067b285e44->enter($__internal_669a3870d56ec2f780a1b2a8ed6cc327f5356d2c982d79e00d09f0067b285e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_669a3870d56ec2f780a1b2a8ed6cc327f5356d2c982d79e00d09f0067b285e44->leave($__internal_669a3870d56ec2f780a1b2a8ed6cc327f5356d2c982d79e00d09f0067b285e44_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb458c92bbcb91b0590f375246efb94367a6ba3e0127804364658938a8f202e2 = $this->env->getExtension("native_profiler");
        $__internal_bb458c92bbcb91b0590f375246efb94367a6ba3e0127804364658938a8f202e2->enter($__internal_bb458c92bbcb91b0590f375246efb94367a6ba3e0127804364658938a8f202e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bb458c92bbcb91b0590f375246efb94367a6ba3e0127804364658938a8f202e2->leave($__internal_bb458c92bbcb91b0590f375246efb94367a6ba3e0127804364658938a8f202e2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_690ac4d289f7cc936d21b2e8d28bcf3e3009506ba6ea796287cafa6a21690c32 = $this->env->getExtension("native_profiler");
        $__internal_690ac4d289f7cc936d21b2e8d28bcf3e3009506ba6ea796287cafa6a21690c32->enter($__internal_690ac4d289f7cc936d21b2e8d28bcf3e3009506ba6ea796287cafa6a21690c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_690ac4d289f7cc936d21b2e8d28bcf3e3009506ba6ea796287cafa6a21690c32->leave($__internal_690ac4d289f7cc936d21b2e8d28bcf3e3009506ba6ea796287cafa6a21690c32_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_977a52f5616cb002c845a5178d8877492a067016328a8db9960476d857d86cb5 = $this->env->getExtension("native_profiler");
        $__internal_977a52f5616cb002c845a5178d8877492a067016328a8db9960476d857d86cb5->enter($__internal_977a52f5616cb002c845a5178d8877492a067016328a8db9960476d857d86cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_977a52f5616cb002c845a5178d8877492a067016328a8db9960476d857d86cb5->leave($__internal_977a52f5616cb002c845a5178d8877492a067016328a8db9960476d857d86cb5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87fed2d2ac2a473b5c07d3f434215733f641b756915dcbd24fd9b02b7e625931 = $this->env->getExtension("native_profiler");
        $__internal_87fed2d2ac2a473b5c07d3f434215733f641b756915dcbd24fd9b02b7e625931->enter($__internal_87fed2d2ac2a473b5c07d3f434215733f641b756915dcbd24fd9b02b7e625931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_87fed2d2ac2a473b5c07d3f434215733f641b756915dcbd24fd9b02b7e625931->leave($__internal_87fed2d2ac2a473b5c07d3f434215733f641b756915dcbd24fd9b02b7e625931_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

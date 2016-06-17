<?php

/* ::base.html.twig */
class __TwigTemplate_6ea0900187a95b2dc1e3f59317e153b328dcf6872d56f81923620d100ae1973c extends Twig_Template
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
        $__internal_d8a2f48bdee88628527124d6c8e1822b9f239074e7a09f837b9b6799e217ec81 = $this->env->getExtension("native_profiler");
        $__internal_d8a2f48bdee88628527124d6c8e1822b9f239074e7a09f837b9b6799e217ec81->enter($__internal_d8a2f48bdee88628527124d6c8e1822b9f239074e7a09f837b9b6799e217ec81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d8a2f48bdee88628527124d6c8e1822b9f239074e7a09f837b9b6799e217ec81->leave($__internal_d8a2f48bdee88628527124d6c8e1822b9f239074e7a09f837b9b6799e217ec81_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_941cc1e339a8bf51d22a4970f35e1a370122d34cbaee32345966bc17860e3ff0 = $this->env->getExtension("native_profiler");
        $__internal_941cc1e339a8bf51d22a4970f35e1a370122d34cbaee32345966bc17860e3ff0->enter($__internal_941cc1e339a8bf51d22a4970f35e1a370122d34cbaee32345966bc17860e3ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_941cc1e339a8bf51d22a4970f35e1a370122d34cbaee32345966bc17860e3ff0->leave($__internal_941cc1e339a8bf51d22a4970f35e1a370122d34cbaee32345966bc17860e3ff0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67c604860504f785136f686c03312d7e64c194654999e52dc8a0343f1814b08a = $this->env->getExtension("native_profiler");
        $__internal_67c604860504f785136f686c03312d7e64c194654999e52dc8a0343f1814b08a->enter($__internal_67c604860504f785136f686c03312d7e64c194654999e52dc8a0343f1814b08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_67c604860504f785136f686c03312d7e64c194654999e52dc8a0343f1814b08a->leave($__internal_67c604860504f785136f686c03312d7e64c194654999e52dc8a0343f1814b08a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad234af39177cd614f26b9a57f471366d4975699e9972a0fe1e8dfc6f2e476f4 = $this->env->getExtension("native_profiler");
        $__internal_ad234af39177cd614f26b9a57f471366d4975699e9972a0fe1e8dfc6f2e476f4->enter($__internal_ad234af39177cd614f26b9a57f471366d4975699e9972a0fe1e8dfc6f2e476f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad234af39177cd614f26b9a57f471366d4975699e9972a0fe1e8dfc6f2e476f4->leave($__internal_ad234af39177cd614f26b9a57f471366d4975699e9972a0fe1e8dfc6f2e476f4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8008e0ce23c177d5c34f05c5d79277668c52c87909050e0a8058d5f2914e088e = $this->env->getExtension("native_profiler");
        $__internal_8008e0ce23c177d5c34f05c5d79277668c52c87909050e0a8058d5f2914e088e->enter($__internal_8008e0ce23c177d5c34f05c5d79277668c52c87909050e0a8058d5f2914e088e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8008e0ce23c177d5c34f05c5d79277668c52c87909050e0a8058d5f2914e088e->leave($__internal_8008e0ce23c177d5c34f05c5d79277668c52c87909050e0a8058d5f2914e088e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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

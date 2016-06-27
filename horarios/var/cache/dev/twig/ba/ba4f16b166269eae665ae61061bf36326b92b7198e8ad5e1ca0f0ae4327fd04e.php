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
        $__internal_482a110179a3eeb4dff5c33bc527557d46a46b5eace3778b4a632be668f0bce4 = $this->env->getExtension("native_profiler");
        $__internal_482a110179a3eeb4dff5c33bc527557d46a46b5eace3778b4a632be668f0bce4->enter($__internal_482a110179a3eeb4dff5c33bc527557d46a46b5eace3778b4a632be668f0bce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_482a110179a3eeb4dff5c33bc527557d46a46b5eace3778b4a632be668f0bce4->leave($__internal_482a110179a3eeb4dff5c33bc527557d46a46b5eace3778b4a632be668f0bce4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d63ab1421c473f7e42a65d91346e1cd0f72feaf7f76526b2ceed76d7ae74c17a = $this->env->getExtension("native_profiler");
        $__internal_d63ab1421c473f7e42a65d91346e1cd0f72feaf7f76526b2ceed76d7ae74c17a->enter($__internal_d63ab1421c473f7e42a65d91346e1cd0f72feaf7f76526b2ceed76d7ae74c17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d63ab1421c473f7e42a65d91346e1cd0f72feaf7f76526b2ceed76d7ae74c17a->leave($__internal_d63ab1421c473f7e42a65d91346e1cd0f72feaf7f76526b2ceed76d7ae74c17a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3335362dd9856308ecd452a4007059a95b7e6dbe3b6dc8f60f308869c9dd7ad8 = $this->env->getExtension("native_profiler");
        $__internal_3335362dd9856308ecd452a4007059a95b7e6dbe3b6dc8f60f308869c9dd7ad8->enter($__internal_3335362dd9856308ecd452a4007059a95b7e6dbe3b6dc8f60f308869c9dd7ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3335362dd9856308ecd452a4007059a95b7e6dbe3b6dc8f60f308869c9dd7ad8->leave($__internal_3335362dd9856308ecd452a4007059a95b7e6dbe3b6dc8f60f308869c9dd7ad8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_60192bf31bf9439056221005e71ad7a1e7231cbf42e4856d3504154a5c2378e2 = $this->env->getExtension("native_profiler");
        $__internal_60192bf31bf9439056221005e71ad7a1e7231cbf42e4856d3504154a5c2378e2->enter($__internal_60192bf31bf9439056221005e71ad7a1e7231cbf42e4856d3504154a5c2378e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60192bf31bf9439056221005e71ad7a1e7231cbf42e4856d3504154a5c2378e2->leave($__internal_60192bf31bf9439056221005e71ad7a1e7231cbf42e4856d3504154a5c2378e2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_359aa5051c6a6cc911fb94aad9104d6743b4b5c05ea2d133545963871a1368dd = $this->env->getExtension("native_profiler");
        $__internal_359aa5051c6a6cc911fb94aad9104d6743b4b5c05ea2d133545963871a1368dd->enter($__internal_359aa5051c6a6cc911fb94aad9104d6743b4b5c05ea2d133545963871a1368dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_359aa5051c6a6cc911fb94aad9104d6743b4b5c05ea2d133545963871a1368dd->leave($__internal_359aa5051c6a6cc911fb94aad9104d6743b4b5c05ea2d133545963871a1368dd_prof);

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
        return array (  99 => 12,  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 13,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

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
        $__internal_87cf04209f8bb9c73d259d611f44a09c3cac1cbbefd319a997963a91c40b0ecd = $this->env->getExtension("native_profiler");
        $__internal_87cf04209f8bb9c73d259d611f44a09c3cac1cbbefd319a997963a91c40b0ecd->enter($__internal_87cf04209f8bb9c73d259d611f44a09c3cac1cbbefd319a997963a91c40b0ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_87cf04209f8bb9c73d259d611f44a09c3cac1cbbefd319a997963a91c40b0ecd->leave($__internal_87cf04209f8bb9c73d259d611f44a09c3cac1cbbefd319a997963a91c40b0ecd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a2b64d8b29a9761bdc1649b16c390193fc89316636e75fe3d84014160d14b4a = $this->env->getExtension("native_profiler");
        $__internal_1a2b64d8b29a9761bdc1649b16c390193fc89316636e75fe3d84014160d14b4a->enter($__internal_1a2b64d8b29a9761bdc1649b16c390193fc89316636e75fe3d84014160d14b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1a2b64d8b29a9761bdc1649b16c390193fc89316636e75fe3d84014160d14b4a->leave($__internal_1a2b64d8b29a9761bdc1649b16c390193fc89316636e75fe3d84014160d14b4a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3b189ffa7fcca0fb278c8dcab67518262adfa09e7b317171d57208de7ec75e7 = $this->env->getExtension("native_profiler");
        $__internal_c3b189ffa7fcca0fb278c8dcab67518262adfa09e7b317171d57208de7ec75e7->enter($__internal_c3b189ffa7fcca0fb278c8dcab67518262adfa09e7b317171d57208de7ec75e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c3b189ffa7fcca0fb278c8dcab67518262adfa09e7b317171d57208de7ec75e7->leave($__internal_c3b189ffa7fcca0fb278c8dcab67518262adfa09e7b317171d57208de7ec75e7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_97d33888bf92bf4af4cf91335e4c058db0a31b9c1b101f10d92b886abf3c4d29 = $this->env->getExtension("native_profiler");
        $__internal_97d33888bf92bf4af4cf91335e4c058db0a31b9c1b101f10d92b886abf3c4d29->enter($__internal_97d33888bf92bf4af4cf91335e4c058db0a31b9c1b101f10d92b886abf3c4d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97d33888bf92bf4af4cf91335e4c058db0a31b9c1b101f10d92b886abf3c4d29->leave($__internal_97d33888bf92bf4af4cf91335e4c058db0a31b9c1b101f10d92b886abf3c4d29_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_707a719eebe28e51ca075c4f0ef0f2f35204f8116ae178a98b7f510a937c3f8c = $this->env->getExtension("native_profiler");
        $__internal_707a719eebe28e51ca075c4f0ef0f2f35204f8116ae178a98b7f510a937c3f8c->enter($__internal_707a719eebe28e51ca075c4f0ef0f2f35204f8116ae178a98b7f510a937c3f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_707a719eebe28e51ca075c4f0ef0f2f35204f8116ae178a98b7f510a937c3f8c->leave($__internal_707a719eebe28e51ca075c4f0ef0f2f35204f8116ae178a98b7f510a937c3f8c_prof);

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

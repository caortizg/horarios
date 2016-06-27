<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb4d9ca618b386af1c5341699d71366a055a1800780b1040b969fb9d21562ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2aefd585505f2305a647586919a9bbb97d1795b343ac3d5521bdece5260276e = $this->env->getExtension("native_profiler");
        $__internal_d2aefd585505f2305a647586919a9bbb97d1795b343ac3d5521bdece5260276e->enter($__internal_d2aefd585505f2305a647586919a9bbb97d1795b343ac3d5521bdece5260276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2aefd585505f2305a647586919a9bbb97d1795b343ac3d5521bdece5260276e->leave($__internal_d2aefd585505f2305a647586919a9bbb97d1795b343ac3d5521bdece5260276e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dceb80b2bc8a15bf922d016ebeddc7451a64c1505c61a38d76a41e5655b16c5b = $this->env->getExtension("native_profiler");
        $__internal_dceb80b2bc8a15bf922d016ebeddc7451a64c1505c61a38d76a41e5655b16c5b->enter($__internal_dceb80b2bc8a15bf922d016ebeddc7451a64c1505c61a38d76a41e5655b16c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dceb80b2bc8a15bf922d016ebeddc7451a64c1505c61a38d76a41e5655b16c5b->leave($__internal_dceb80b2bc8a15bf922d016ebeddc7451a64c1505c61a38d76a41e5655b16c5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_718dc7c72fad05b0c45f4f11d639efcbf753006fa710c5ac05ff1b9f3a494f98 = $this->env->getExtension("native_profiler");
        $__internal_718dc7c72fad05b0c45f4f11d639efcbf753006fa710c5ac05ff1b9f3a494f98->enter($__internal_718dc7c72fad05b0c45f4f11d639efcbf753006fa710c5ac05ff1b9f3a494f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_718dc7c72fad05b0c45f4f11d639efcbf753006fa710c5ac05ff1b9f3a494f98->leave($__internal_718dc7c72fad05b0c45f4f11d639efcbf753006fa710c5ac05ff1b9f3a494f98_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_20ef430bd4d97abe82c32c8b83f2db60e7594bff86c9a07f0536f3b92ca086aa = $this->env->getExtension("native_profiler");
        $__internal_20ef430bd4d97abe82c32c8b83f2db60e7594bff86c9a07f0536f3b92ca086aa->enter($__internal_20ef430bd4d97abe82c32c8b83f2db60e7594bff86c9a07f0536f3b92ca086aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_20ef430bd4d97abe82c32c8b83f2db60e7594bff86c9a07f0536f3b92ca086aa->leave($__internal_20ef430bd4d97abe82c32c8b83f2db60e7594bff86c9a07f0536f3b92ca086aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

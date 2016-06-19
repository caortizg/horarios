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
        $__internal_4e56fc646348bf307d9a068e2b58e4051d42d2112dfef4e337364a47d898aa7d = $this->env->getExtension("native_profiler");
        $__internal_4e56fc646348bf307d9a068e2b58e4051d42d2112dfef4e337364a47d898aa7d->enter($__internal_4e56fc646348bf307d9a068e2b58e4051d42d2112dfef4e337364a47d898aa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e56fc646348bf307d9a068e2b58e4051d42d2112dfef4e337364a47d898aa7d->leave($__internal_4e56fc646348bf307d9a068e2b58e4051d42d2112dfef4e337364a47d898aa7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c04b8a3f94ccef41aed99988c4c2825329878a5a204d05fd34314bbca6c0e94a = $this->env->getExtension("native_profiler");
        $__internal_c04b8a3f94ccef41aed99988c4c2825329878a5a204d05fd34314bbca6c0e94a->enter($__internal_c04b8a3f94ccef41aed99988c4c2825329878a5a204d05fd34314bbca6c0e94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c04b8a3f94ccef41aed99988c4c2825329878a5a204d05fd34314bbca6c0e94a->leave($__internal_c04b8a3f94ccef41aed99988c4c2825329878a5a204d05fd34314bbca6c0e94a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_483076a0040dddfe5351a80bd8f9292bcd8e35ab5239472475f282236bc32428 = $this->env->getExtension("native_profiler");
        $__internal_483076a0040dddfe5351a80bd8f9292bcd8e35ab5239472475f282236bc32428->enter($__internal_483076a0040dddfe5351a80bd8f9292bcd8e35ab5239472475f282236bc32428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_483076a0040dddfe5351a80bd8f9292bcd8e35ab5239472475f282236bc32428->leave($__internal_483076a0040dddfe5351a80bd8f9292bcd8e35ab5239472475f282236bc32428_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c83717959c298b50c9f88af01375f0b4f29e969aee90c85aacde255d91621b4 = $this->env->getExtension("native_profiler");
        $__internal_4c83717959c298b50c9f88af01375f0b4f29e969aee90c85aacde255d91621b4->enter($__internal_4c83717959c298b50c9f88af01375f0b4f29e969aee90c85aacde255d91621b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4c83717959c298b50c9f88af01375f0b4f29e969aee90c85aacde255d91621b4->leave($__internal_4c83717959c298b50c9f88af01375f0b4f29e969aee90c85aacde255d91621b4_prof);

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

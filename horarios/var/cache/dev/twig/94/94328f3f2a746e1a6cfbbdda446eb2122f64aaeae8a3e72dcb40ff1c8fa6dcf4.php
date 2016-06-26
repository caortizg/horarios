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
        $__internal_79214ed03181268f8c7f014fe49c3db10d1953fdbfff0f3baf75f7fcbea861eb = $this->env->getExtension("native_profiler");
        $__internal_79214ed03181268f8c7f014fe49c3db10d1953fdbfff0f3baf75f7fcbea861eb->enter($__internal_79214ed03181268f8c7f014fe49c3db10d1953fdbfff0f3baf75f7fcbea861eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79214ed03181268f8c7f014fe49c3db10d1953fdbfff0f3baf75f7fcbea861eb->leave($__internal_79214ed03181268f8c7f014fe49c3db10d1953fdbfff0f3baf75f7fcbea861eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98aa5963db6b835e32f296cc168cc91f81917cc2140206ebf517027a17fe4e81 = $this->env->getExtension("native_profiler");
        $__internal_98aa5963db6b835e32f296cc168cc91f81917cc2140206ebf517027a17fe4e81->enter($__internal_98aa5963db6b835e32f296cc168cc91f81917cc2140206ebf517027a17fe4e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_98aa5963db6b835e32f296cc168cc91f81917cc2140206ebf517027a17fe4e81->leave($__internal_98aa5963db6b835e32f296cc168cc91f81917cc2140206ebf517027a17fe4e81_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7413d6e5183087857692adedc8b2cf2a6cc05ff03eec2d8bffe7d19e0ee13f9d = $this->env->getExtension("native_profiler");
        $__internal_7413d6e5183087857692adedc8b2cf2a6cc05ff03eec2d8bffe7d19e0ee13f9d->enter($__internal_7413d6e5183087857692adedc8b2cf2a6cc05ff03eec2d8bffe7d19e0ee13f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7413d6e5183087857692adedc8b2cf2a6cc05ff03eec2d8bffe7d19e0ee13f9d->leave($__internal_7413d6e5183087857692adedc8b2cf2a6cc05ff03eec2d8bffe7d19e0ee13f9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_60c8d709ce1dcac57f99590c7c1aaa6c4d3e55f44009d5f7b9f5b33c949580a1 = $this->env->getExtension("native_profiler");
        $__internal_60c8d709ce1dcac57f99590c7c1aaa6c4d3e55f44009d5f7b9f5b33c949580a1->enter($__internal_60c8d709ce1dcac57f99590c7c1aaa6c4d3e55f44009d5f7b9f5b33c949580a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_60c8d709ce1dcac57f99590c7c1aaa6c4d3e55f44009d5f7b9f5b33c949580a1->leave($__internal_60c8d709ce1dcac57f99590c7c1aaa6c4d3e55f44009d5f7b9f5b33c949580a1_prof);

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

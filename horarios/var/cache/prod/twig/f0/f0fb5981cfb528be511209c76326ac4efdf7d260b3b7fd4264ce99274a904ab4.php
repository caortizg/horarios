<?php

/* CaogHorariosBundle::/general/listBase.html.twig */
class __TwigTemplate_d842fab765b1186b659efffbc83458d9eb310fd8a906415f1cb29cefb486da99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "CaogHorariosBundle::/general/listBase.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'theadList' => array($this, 'block_theadList'),
            'tbodyList' => array($this, 'block_tbodyList'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
        <table id=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["idList"]) ? $context["idList"] : null), "html", null, true);
        echo "\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    ";
        // line 12
        $this->displayBlock('theadList', $context, $blocks);
        // line 13
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 16
        $this->displayBlock('tbodyList', $context, $blocks);
        // line 17
        echo "            </tbody>
        </table>
    </div>
";
    }

    // line 12
    public function block_theadList($context, array $blocks = array())
    {
    }

    // line 16
    public function block_tbodyList($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function() {
            \$('#";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["idList"]) ? $context["idList"] : null), "html", null, true);
        echo "').DataTable({
                'language'  : {\"url\" : \"//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Spanish.json\"},
            });
        } );
    </script>
";
    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle::/general/listBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  96 => 24,  92 => 23,  87 => 22,  84 => 21,  79 => 16,  74 => 12,  67 => 17,  65 => 16,  60 => 13,  58 => 12,  52 => 9,  49 => 8,  46 => 7,  40 => 4,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{parent()}}*/
/*     <link href="{{ asset('public/css/dataTables.bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <table id="{{idList}}" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*             <thead>*/
/*                 <tr>*/
/*                     {% block theadList %}{% endblock %}*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% block tbodyList %}{% endblock %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{parent()}}*/
/*     <script src="{{ asset('public/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('public/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('#{{idList}}').DataTable({*/
/*                 'language'  : {"url" : "//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Spanish.json"},*/
/*             });*/
/*         } );*/
/*     </script>*/
/* {% endblock %}*/
/* */

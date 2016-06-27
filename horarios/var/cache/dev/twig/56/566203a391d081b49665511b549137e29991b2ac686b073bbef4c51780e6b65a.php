<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ceec8bebf58c62d5d7cf45892e7fde1801c170e0983d03dfa17d8fe2338d6f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_839d111cc9b0082396645555d6173539359532bc4f1b13fc89994827ac9167af = $this->env->getExtension("native_profiler");
        $__internal_839d111cc9b0082396645555d6173539359532bc4f1b13fc89994827ac9167af->enter($__internal_839d111cc9b0082396645555d6173539359532bc4f1b13fc89994827ac9167af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_839d111cc9b0082396645555d6173539359532bc4f1b13fc89994827ac9167af->leave($__internal_839d111cc9b0082396645555d6173539359532bc4f1b13fc89994827ac9167af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */

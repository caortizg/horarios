<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5d4d91c13bef690cee53b25a0f7048fa24bbf58df48bd1a279e25fc6d20fb6f7 extends Twig_Template
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
        $__internal_dce54584e47733dee501f275f7ae9fcc9a63fab25564b36a01e3474a3aebbe17 = $this->env->getExtension("native_profiler");
        $__internal_dce54584e47733dee501f275f7ae9fcc9a63fab25564b36a01e3474a3aebbe17->enter($__internal_dce54584e47733dee501f275f7ae9fcc9a63fab25564b36a01e3474a3aebbe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dce54584e47733dee501f275f7ae9fcc9a63fab25564b36a01e3474a3aebbe17->leave($__internal_dce54584e47733dee501f275f7ae9fcc9a63fab25564b36a01e3474a3aebbe17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

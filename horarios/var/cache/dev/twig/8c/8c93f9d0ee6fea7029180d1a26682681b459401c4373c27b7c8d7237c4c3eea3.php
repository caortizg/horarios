<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f96983911695925d99d08e9982895f1c187b129183eb3c35e81d6a2585689a18 extends Twig_Template
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
        $__internal_63b2546c838824e224f650b1c332cfb8348d3be764f1088a9aa1b951f8e4d4de = $this->env->getExtension("native_profiler");
        $__internal_63b2546c838824e224f650b1c332cfb8348d3be764f1088a9aa1b951f8e4d4de->enter($__internal_63b2546c838824e224f650b1c332cfb8348d3be764f1088a9aa1b951f8e4d4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_63b2546c838824e224f650b1c332cfb8348d3be764f1088a9aa1b951f8e4d4de->leave($__internal_63b2546c838824e224f650b1c332cfb8348d3be764f1088a9aa1b951f8e4d4de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

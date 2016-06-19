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
        $__internal_381507b1445e78b7530ac0598bf2fc7e1c8808c77b92c2fc3ea69cb295191ebe = $this->env->getExtension("native_profiler");
        $__internal_381507b1445e78b7530ac0598bf2fc7e1c8808c77b92c2fc3ea69cb295191ebe->enter($__internal_381507b1445e78b7530ac0598bf2fc7e1c8808c77b92c2fc3ea69cb295191ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_381507b1445e78b7530ac0598bf2fc7e1c8808c77b92c2fc3ea69cb295191ebe->leave($__internal_381507b1445e78b7530ac0598bf2fc7e1c8808c77b92c2fc3ea69cb295191ebe_prof);

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

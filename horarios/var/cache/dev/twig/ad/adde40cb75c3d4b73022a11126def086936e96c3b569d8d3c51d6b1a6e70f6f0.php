<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_71791c7373cbc3094eab07cd56d02f59d938f30fde9a0c0894d898e30386a317 extends Twig_Template
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
        $__internal_42fb221d5e7856a75976fa2f0ebf159b26c7d0da03185fa1b20a929274a45581 = $this->env->getExtension("native_profiler");
        $__internal_42fb221d5e7856a75976fa2f0ebf159b26c7d0da03185fa1b20a929274a45581->enter($__internal_42fb221d5e7856a75976fa2f0ebf159b26c7d0da03185fa1b20a929274a45581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_42fb221d5e7856a75976fa2f0ebf159b26c7d0da03185fa1b20a929274a45581->leave($__internal_42fb221d5e7856a75976fa2f0ebf159b26c7d0da03185fa1b20a929274a45581_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

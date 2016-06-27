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
        $__internal_b5d2c86aed00307ccaa216c404f45bbad098c4657174bcf7004ae176a7e977d9 = $this->env->getExtension("native_profiler");
        $__internal_b5d2c86aed00307ccaa216c404f45bbad098c4657174bcf7004ae176a7e977d9->enter($__internal_b5d2c86aed00307ccaa216c404f45bbad098c4657174bcf7004ae176a7e977d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b5d2c86aed00307ccaa216c404f45bbad098c4657174bcf7004ae176a7e977d9->leave($__internal_b5d2c86aed00307ccaa216c404f45bbad098c4657174bcf7004ae176a7e977d9_prof);

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

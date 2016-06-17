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
        $__internal_d6b7850e48919cc9875ebe28e57d064038205880069081557567c7c136d47f6e = $this->env->getExtension("native_profiler");
        $__internal_d6b7850e48919cc9875ebe28e57d064038205880069081557567c7c136d47f6e->enter($__internal_d6b7850e48919cc9875ebe28e57d064038205880069081557567c7c136d47f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d6b7850e48919cc9875ebe28e57d064038205880069081557567c7c136d47f6e->leave($__internal_d6b7850e48919cc9875ebe28e57d064038205880069081557567c7c136d47f6e_prof);

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

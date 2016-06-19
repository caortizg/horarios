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
        $__internal_8000b76f74d0ad006db931f4cbd7cfb508643b31a23f153ec82d047932203d91 = $this->env->getExtension("native_profiler");
        $__internal_8000b76f74d0ad006db931f4cbd7cfb508643b31a23f153ec82d047932203d91->enter($__internal_8000b76f74d0ad006db931f4cbd7cfb508643b31a23f153ec82d047932203d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8000b76f74d0ad006db931f4cbd7cfb508643b31a23f153ec82d047932203d91->leave($__internal_8000b76f74d0ad006db931f4cbd7cfb508643b31a23f153ec82d047932203d91_prof);

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

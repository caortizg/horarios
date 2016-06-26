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
        $__internal_c8f4b55f751d901491a773154a0a1b65d163e4c9fed38397a40988098a28ce11 = $this->env->getExtension("native_profiler");
        $__internal_c8f4b55f751d901491a773154a0a1b65d163e4c9fed38397a40988098a28ce11->enter($__internal_c8f4b55f751d901491a773154a0a1b65d163e4c9fed38397a40988098a28ce11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c8f4b55f751d901491a773154a0a1b65d163e4c9fed38397a40988098a28ce11->leave($__internal_c8f4b55f751d901491a773154a0a1b65d163e4c9fed38397a40988098a28ce11_prof);

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

<?php

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_85a01fd5f8f90cb5d13dc142c1846e8ffceb829bd61483db66d9c3cc5e63bbb4 extends Twig_Template
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
        $__internal_dae722c870c64e3af097e9f80935312e14799c6284ca580f6de0605b043d83e6 = $this->env->getExtension("native_profiler");
        $__internal_dae722c870c64e3af097e9f80935312e14799c6284ca580f6de0605b043d83e6->enter($__internal_dae722c870c64e3af097e9f80935312e14799c6284ca580f6de0605b043d83e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        // line 1
        echo "<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$view['form']->block(\$form, 'attributes', array('attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
";
        
        $__internal_dae722c870c64e3af097e9f80935312e14799c6284ca580f6de0605b043d83e6->leave($__internal_dae722c870c64e3af097e9f80935312e14799c6284ca580f6de0605b043d83e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php use Symfony\Component\Form\ChoiceList\View\ChoiceGroupView;*/
/* */
/* $translatorHelper = $view['translator']; // outside of the loop for performance reasons! ?>*/
/* <?php $formHelper = $view['form']; ?>*/
/* <?php foreach ($choices as $group_label => $choice): ?>*/
/*     <?php if (is_array($choice) || $choice instanceof ChoiceGroupView): ?>*/
/*         <optgroup label="<?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($group_label, array(), $choice_translation_domain) : $group_label) ?>">*/
/*             <?php echo $formHelper->block($form, 'choice_widget_options', array('choices' => $choice)) ?>*/
/*         </optgroup>*/
/*     <?php else: ?>*/
/*         <option value="<?php echo $view->escape($choice->value) ?>" <?php echo $view['form']->block($form, 'attributes', array('attr' => $choice->attr)) ?><?php if ($is_selected($choice->value, $value)): ?> selected="selected"<?php endif?>><?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($choice->label, array(), $choice_translation_domain) : $choice->label) ?></option>*/
/*     <?php endif ?>*/
/* <?php endforeach ?>*/
/* */

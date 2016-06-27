<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_592acdb70ac82005a481a374cd55144afa6fb757dc50cf477d4cd3b89300046f extends Twig_Template
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
        $__internal_860de792500c3d2daa5e1439b5257a38286d54636a4006eba4444ac585719a7f = $this->env->getExtension("native_profiler");
        $__internal_860de792500c3d2daa5e1439b5257a38286d54636a4006eba4444ac585719a7f->enter($__internal_860de792500c3d2daa5e1439b5257a38286d54636a4006eba4444ac585719a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_860de792500c3d2daa5e1439b5257a38286d54636a4006eba4444ac585719a7f->leave($__internal_860de792500c3d2daa5e1439b5257a38286d54636a4006eba4444ac585719a7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

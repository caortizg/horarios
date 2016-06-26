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
        $__internal_cd3e036820a7eacfd2b380cb1970e83e70d5ca3c34ac8c1069e970d981743884 = $this->env->getExtension("native_profiler");
        $__internal_cd3e036820a7eacfd2b380cb1970e83e70d5ca3c34ac8c1069e970d981743884->enter($__internal_cd3e036820a7eacfd2b380cb1970e83e70d5ca3c34ac8c1069e970d981743884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_cd3e036820a7eacfd2b380cb1970e83e70d5ca3c34ac8c1069e970d981743884->leave($__internal_cd3e036820a7eacfd2b380cb1970e83e70d5ca3c34ac8c1069e970d981743884_prof);

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

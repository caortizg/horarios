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
        $__internal_5510cb26ffc6b3aa367fc4b80f6067449871dbabfaf8e9db8ab4820d9d619750 = $this->env->getExtension("native_profiler");
        $__internal_5510cb26ffc6b3aa367fc4b80f6067449871dbabfaf8e9db8ab4820d9d619750->enter($__internal_5510cb26ffc6b3aa367fc4b80f6067449871dbabfaf8e9db8ab4820d9d619750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5510cb26ffc6b3aa367fc4b80f6067449871dbabfaf8e9db8ab4820d9d619750->leave($__internal_5510cb26ffc6b3aa367fc4b80f6067449871dbabfaf8e9db8ab4820d9d619750_prof);

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

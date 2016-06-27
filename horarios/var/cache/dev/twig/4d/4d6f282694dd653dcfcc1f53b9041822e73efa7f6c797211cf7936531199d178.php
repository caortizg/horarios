<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a94dbc2a88f41650c70620ca1af0ebf5ef94975c07fe396e826789aa91d03ff8 extends Twig_Template
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
        $__internal_8195646ba64f9e99fd24238b600700923f74b9be172ee5805ae866c5cfe1ff01 = $this->env->getExtension("native_profiler");
        $__internal_8195646ba64f9e99fd24238b600700923f74b9be172ee5805ae866c5cfe1ff01->enter($__internal_8195646ba64f9e99fd24238b600700923f74b9be172ee5805ae866c5cfe1ff01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8195646ba64f9e99fd24238b600700923f74b9be172ee5805ae866c5cfe1ff01->leave($__internal_8195646ba64f9e99fd24238b600700923f74b9be172ee5805ae866c5cfe1ff01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

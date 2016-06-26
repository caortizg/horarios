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
        $__internal_471b16e29fa166c01743a49cc43c4380e2100b0830bbea722b6044ddfd6643cb = $this->env->getExtension("native_profiler");
        $__internal_471b16e29fa166c01743a49cc43c4380e2100b0830bbea722b6044ddfd6643cb->enter($__internal_471b16e29fa166c01743a49cc43c4380e2100b0830bbea722b6044ddfd6643cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_471b16e29fa166c01743a49cc43c4380e2100b0830bbea722b6044ddfd6643cb->leave($__internal_471b16e29fa166c01743a49cc43c4380e2100b0830bbea722b6044ddfd6643cb_prof);

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

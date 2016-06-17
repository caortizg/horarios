<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_62a52bb88adc795dc52572936e0b7b88865128146883ea8aa7a5070ecdacc996 extends Twig_Template
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
        $__internal_30d4be5c2df21d8e53cffd749ac384bf81573c04737971bcb7ff7be6abbd4f8a = $this->env->getExtension("native_profiler");
        $__internal_30d4be5c2df21d8e53cffd749ac384bf81573c04737971bcb7ff7be6abbd4f8a->enter($__internal_30d4be5c2df21d8e53cffd749ac384bf81573c04737971bcb7ff7be6abbd4f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_30d4be5c2df21d8e53cffd749ac384bf81573c04737971bcb7ff7be6abbd4f8a->leave($__internal_30d4be5c2df21d8e53cffd749ac384bf81573c04737971bcb7ff7be6abbd4f8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

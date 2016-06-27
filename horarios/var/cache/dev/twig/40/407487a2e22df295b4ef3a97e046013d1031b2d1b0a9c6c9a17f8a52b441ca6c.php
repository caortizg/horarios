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
        $__internal_64676267c61c697fc915eab4b1a3fbe07a311422c0ad5a77a05bb1031bff7585 = $this->env->getExtension("native_profiler");
        $__internal_64676267c61c697fc915eab4b1a3fbe07a311422c0ad5a77a05bb1031bff7585->enter($__internal_64676267c61c697fc915eab4b1a3fbe07a311422c0ad5a77a05bb1031bff7585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_64676267c61c697fc915eab4b1a3fbe07a311422c0ad5a77a05bb1031bff7585->leave($__internal_64676267c61c697fc915eab4b1a3fbe07a311422c0ad5a77a05bb1031bff7585_prof);

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

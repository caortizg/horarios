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
        $__internal_1f78e4647a8f79da911d909063b1e66b58b3c557ef876aa39467082604fcce21 = $this->env->getExtension("native_profiler");
        $__internal_1f78e4647a8f79da911d909063b1e66b58b3c557ef876aa39467082604fcce21->enter($__internal_1f78e4647a8f79da911d909063b1e66b58b3c557ef876aa39467082604fcce21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1f78e4647a8f79da911d909063b1e66b58b3c557ef876aa39467082604fcce21->leave($__internal_1f78e4647a8f79da911d909063b1e66b58b3c557ef876aa39467082604fcce21_prof);

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

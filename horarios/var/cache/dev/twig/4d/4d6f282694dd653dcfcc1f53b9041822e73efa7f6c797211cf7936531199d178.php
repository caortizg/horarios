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
        $__internal_d780f366fcda6b8c5bb5eb2592bf756a900f9e39d496aa201645da9da8a40f57 = $this->env->getExtension("native_profiler");
        $__internal_d780f366fcda6b8c5bb5eb2592bf756a900f9e39d496aa201645da9da8a40f57->enter($__internal_d780f366fcda6b8c5bb5eb2592bf756a900f9e39d496aa201645da9da8a40f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d780f366fcda6b8c5bb5eb2592bf756a900f9e39d496aa201645da9da8a40f57->leave($__internal_d780f366fcda6b8c5bb5eb2592bf756a900f9e39d496aa201645da9da8a40f57_prof);

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

<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4c414c64d8c3393fda21a3d6b39b137cf71236f41609bc9008736f85a4160fc1 extends Twig_Template
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
        $__internal_b2eebd86e61d8fcbf9a4ec11fd634f25b9dad94e68f3101fddabc123d162f1e5 = $this->env->getExtension("native_profiler");
        $__internal_b2eebd86e61d8fcbf9a4ec11fd634f25b9dad94e68f3101fddabc123d162f1e5->enter($__internal_b2eebd86e61d8fcbf9a4ec11fd634f25b9dad94e68f3101fddabc123d162f1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b2eebd86e61d8fcbf9a4ec11fd634f25b9dad94e68f3101fddabc123d162f1e5->leave($__internal_b2eebd86e61d8fcbf9a4ec11fd634f25b9dad94e68f3101fddabc123d162f1e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

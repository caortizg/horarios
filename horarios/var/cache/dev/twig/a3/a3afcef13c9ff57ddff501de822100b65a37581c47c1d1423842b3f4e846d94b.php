<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_32312852f179a081c585a996e9f103065ca89b947da856b72308aa4579b42ece extends Twig_Template
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
        $__internal_f6b3598b0d8e7a6c5efee09d5e004f7a5fcd4036c7fa5f270dfaa168ffe1dbaa = $this->env->getExtension("native_profiler");
        $__internal_f6b3598b0d8e7a6c5efee09d5e004f7a5fcd4036c7fa5f270dfaa168ffe1dbaa->enter($__internal_f6b3598b0d8e7a6c5efee09d5e004f7a5fcd4036c7fa5f270dfaa168ffe1dbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f6b3598b0d8e7a6c5efee09d5e004f7a5fcd4036c7fa5f270dfaa168ffe1dbaa->leave($__internal_f6b3598b0d8e7a6c5efee09d5e004f7a5fcd4036c7fa5f270dfaa168ffe1dbaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

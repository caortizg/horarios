<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ceec8bebf58c62d5d7cf45892e7fde1801c170e0983d03dfa17d8fe2338d6f2c extends Twig_Template
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
        $__internal_9a95118eab122a9613c8b12bf5f279f1489bd33635b9a013a774383ab5cf7ebc = $this->env->getExtension("native_profiler");
        $__internal_9a95118eab122a9613c8b12bf5f279f1489bd33635b9a013a774383ab5cf7ebc->enter($__internal_9a95118eab122a9613c8b12bf5f279f1489bd33635b9a013a774383ab5cf7ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9a95118eab122a9613c8b12bf5f279f1489bd33635b9a013a774383ab5cf7ebc->leave($__internal_9a95118eab122a9613c8b12bf5f279f1489bd33635b9a013a774383ab5cf7ebc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */

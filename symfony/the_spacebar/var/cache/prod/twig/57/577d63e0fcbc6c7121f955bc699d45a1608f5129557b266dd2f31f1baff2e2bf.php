<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_65ae33e35109e34b7784b82feb0041f2c135df084e9aea2a1991a9d1fa27776b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/password_widget.html.php", "/home/leonardoscuquejo/mystuff/symfony/the_spacebar/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}

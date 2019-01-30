<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_816e3f183d2a033c4d5fa21404dba5fec481b867a85342db5e44ef3a7171a0aa extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/color_widget.html.php", "/home/leonardoscuquejo/mystuff/symfony/the_spacebar/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}

<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_771684e7083b981629c25cc417ac49dd311726acd8fe19db681819ccc4b9a2cd extends Twig_Template
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
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/button_row.html.php", "/home/leonardoscuquejo/mystuff/symfony/the_spacebar/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}

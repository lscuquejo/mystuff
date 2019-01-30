<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0dcb9e9427526e8e9d1213df4cf1afb822d4f96d162392df3d8b33a838e064fa extends Twig_Template
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
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_end.html.php", "/home/leonardoscuquejo/mystuff/symfony/the_spacebar/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}

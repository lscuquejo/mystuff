<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_071783a7731fce0120c598e66a81a309251e122e0a692c6c82c31461880b4c06 extends Twig_Template
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
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_enctype.html.php", "/home/leonardoscuquejo/mystuff/symfony/the_spacebar/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}

<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c252506a476622f5e497f68fa0b18e6d66e762b88923c06f8eaaa05481b49e14 extends Twig_Template
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
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.atom.twig", "/home/leonardoscuquejo/mystuff/symfony/the_spacebar/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}

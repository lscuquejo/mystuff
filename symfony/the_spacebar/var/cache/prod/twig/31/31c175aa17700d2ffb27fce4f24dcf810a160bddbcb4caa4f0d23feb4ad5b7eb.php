<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f25622ff3074cf9df40b333aa363b0c6e980a02939986d6ffaa16c9f0d5dfa1d extends Twig_Template
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
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.rdf.twig", "/home/leonardoscuquejo/mystuff/symfony/the_spacebar/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}

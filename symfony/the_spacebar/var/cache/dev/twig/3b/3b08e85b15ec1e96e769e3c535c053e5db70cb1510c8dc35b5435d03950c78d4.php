<?php

/* article/show.html.twig */
class __TwigTemplate_98fa07a8eaf5d99683d6d1311f98a4733fccc9a06be454cb5569a6eee1f57103 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Read ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>
<div>
    <p>
        Bacon ipsum dolor amet filet mignon picanha kielbasa jowl hamburger shankle biltong chicken turkey pastrami cupim pork chop. Chicken andouille prosciutto capicola picanha, brisket t-bone. Tri-tip pig pork chop short ribs frankfurter pork ham. Landjaeger meatball meatloaf, kielbasa strip steak leberkas picanha swine chicken pancetta pork loin hamburger pork.
    </p>
    <p>
        Kielbasa pork belly meatball cupim burgdoggen chuck turkey buffalo ground round leberkas cow shank short loin bacon alcatra. Leberkas short loin boudin swine, ham hock bresaola turducken tail pastrami picanha pancetta andouille rump landjaeger bacon. Pastrami swine rump meatball filet mignon turkey alcatra. Picanha filet mignon ground round tongue ham hock ball tip tri-tip, prosciutto leberkas kielbasa short loin short ribs drumstick. Flank pig kielbasa short loin jerky ham hock turducken prosciutto t-bone salami pork jowl.
    </p>
    <p>
        Pastrami short loin pork chop, chicken kielbasa swine turducken jerky short ribs beef. Short ribs alcatra shoulder, flank pork chop shankle t-bone. Tail rump pork chop boudin pig, chicken porchetta. Shank doner biltong, capicola brisket sausage meatloaf beef ribs kevin beef rump ribeye t-bone. Shoulder cupim meatloaf, beef kevin frankfurter picanha bacon. Frankfurter bresaola chuck kevin buffalo strip steak pork loin beef ribs prosciutto picanha shankle. Drumstick prosciutto pancetta beef ribs.
    </p>
</div>

<h2>Comments (";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 20, $this->source); })())), "html", null, true);
        echo ")</h2>

<ul>

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 25
            echo "
        <li>";
            // line 26
            echo twig_escape_filter($this->env, $context["comment"], "html", null, true);
            echo "</li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
</ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  89 => 26,  86 => 25,  82 => 24,  75 => 20,  58 => 7,  52 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Read {{ title }}{% endblock %}

{% block body %}
{# yay! #}
<h1>{{ title }}</h1>
<div>
    <p>
        Bacon ipsum dolor amet filet mignon picanha kielbasa jowl hamburger shankle biltong chicken turkey pastrami cupim pork chop. Chicken andouille prosciutto capicola picanha, brisket t-bone. Tri-tip pig pork chop short ribs frankfurter pork ham. Landjaeger meatball meatloaf, kielbasa strip steak leberkas picanha swine chicken pancetta pork loin hamburger pork.
    </p>
    <p>
        Kielbasa pork belly meatball cupim burgdoggen chuck turkey buffalo ground round leberkas cow shank short loin bacon alcatra. Leberkas short loin boudin swine, ham hock bresaola turducken tail pastrami picanha pancetta andouille rump landjaeger bacon. Pastrami swine rump meatball filet mignon turkey alcatra. Picanha filet mignon ground round tongue ham hock ball tip tri-tip, prosciutto leberkas kielbasa short loin short ribs drumstick. Flank pig kielbasa short loin jerky ham hock turducken prosciutto t-bone salami pork jowl.
    </p>
    <p>
        Pastrami short loin pork chop, chicken kielbasa swine turducken jerky short ribs beef. Short ribs alcatra shoulder, flank pork chop shankle t-bone. Tail rump pork chop boudin pig, chicken porchetta. Shank doner biltong, capicola brisket sausage meatloaf beef ribs kevin beef rump ribeye t-bone. Shoulder cupim meatloaf, beef kevin frankfurter picanha bacon. Frankfurter bresaola chuck kevin buffalo strip steak pork loin beef ribs prosciutto picanha shankle. Drumstick prosciutto pancetta beef ribs.
    </p>
</div>

<h2>Comments ({{ comments|length }})</h2>

<ul>

    {% for comment in comments %}

        <li>{{ comment }}</li>

    {% endfor %}

</ul>

{% endblock body %}", "article/show.html.twig", "/home/lscuquejo/mystuff/symfony/the_spacebar/templates/article/show.html.twig");
    }
}

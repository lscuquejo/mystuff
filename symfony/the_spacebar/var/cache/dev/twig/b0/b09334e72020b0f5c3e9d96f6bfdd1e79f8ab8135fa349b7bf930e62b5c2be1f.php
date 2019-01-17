<?php

/* article/show.html.twig */
class __TwigTemplate_dd88bac2dd95136be438a345caea2b26bc7a9607a5da2ced79cc6d693544ee05 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Read ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 8
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
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
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 21, $this->source); })())), "html", null, true);
        echo ")</h2>

<ul>

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 26
            echo "
        <li>";
            // line 27
            echo twig_escape_filter($this->env, $context["comment"], "html", null, true);
            echo "</li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
</ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  116 => 30,  107 => 27,  104 => 26,  100 => 25,  93 => 21,  76 => 8,  73 => 6,  64 => 5,  45 => 3,  15 => 1,);
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

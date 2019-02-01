<?php

/* article/show.html.twig */
class __TwigTemplate_c41493699fae3574a434d26f1d2b27030b1fd65e4ce4a7035334aad1bebf43b4 extends Twig_Template
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
            'javascripts' => [$this, 'block_javascripts'],
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

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Read: ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"show-article-container p-3 mt-4\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <img class=\"show-article-img\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asteroid.jpeg"), "html", null, true);
        echo "\">
                            <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                                <span class=\"show-article-title \">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</span>
                                <br>
                                <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alien-profile.png"), "html", null, true);
        echo "\"> Mike Ferengi </span>
                                <span class=\"pl-2 article-details\"> 4 hours ago</span>
                                <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">5</span>
                                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_toggle_heart", ["slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new Twig_Error_Runtime('Variable "slug" does not exist.', 18, $this->source); })())]), "html", null, true);
        echo "\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"article-text\">
                                ";
        // line 26
        echo (isset($context["articleContent"]) || array_key_exists("articleContent", $context) ? $context["articleContent"] : (function () { throw new Twig_Error_Runtime('Variable "articleContent" does not exist.', 26, $this->source); })());
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <h3><i class=\"pr-3 fa fa-comment\"></i>";
        // line 37
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 37, $this->source); })())), "html", null, true);
        echo " Comments</h3>
                            <hr>
                            <div class=\"row mb-5\">
                                <div class=\"col-sm-12\">
                                    <img class=\"comment-img rounded-circle\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/astronaut-profile.png"), "html", null, true);
        echo "\">
                                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                                        <span class=\"commenter-name\">Amy Oort</span>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 52
            echo "                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <img class=\"comment-img rounded-circle\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alien-profile.png"), "html", null, true);
            echo "\">
                                        <div class=\"comment-container d-inline-block pl-3 align-top\">
                                            <span class=\"commenter-name\">Mike Ferengi</span>
                                            <br>
                                            <span class=\"comment\"> ";
            // line 58
            echo twig_escape_filter($this->env, $context["comment"], "html", null, true);
            echo "</span>
                                            <p><a href=\"#\">Reply</a></p>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/article_show.js"), "html", null, true);
        echo "\"></script>
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
        return array (  201 => 73,  196 => 72,  187 => 71,  171 => 64,  159 => 58,  152 => 54,  148 => 52,  144 => 51,  131 => 41,  124 => 37,  110 => 26,  99 => 18,  92 => 14,  87 => 12,  82 => 10,  74 => 4,  65 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Read: {{ title }}{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"show-article-container p-3 mt-4\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <img class=\"show-article-img\" src=\"{{ asset('images/asteroid.jpeg') }}\">
                            <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                                <span class=\"show-article-title \">{{ title }}</span>
                                <br>
                                <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\"> Mike Ferengi </span>
                                <span class=\"pl-2 article-details\"> 4 hours ago</span>
                                <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">5</span>
                                <a href=\"{{ path('article_toggle_heart', {slug: slug}) }}\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"article-text\">
                                {{ articleContent|raw }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <h3><i class=\"pr-3 fa fa-comment\"></i>{{ comments|length }} Comments</h3>
                            <hr>
                            <div class=\"row mb-5\">
                                <div class=\"col-sm-12\">
                                    <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/astronaut-profile.png') }}\">
                                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                                        <span class=\"commenter-name\">Amy Oort</span>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                                    </div>
                                </div>
                            </div>
                            {% for comment in comments %}
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\">
                                        <div class=\"comment-container d-inline-block pl-3 align-top\">
                                            <span class=\"commenter-name\">Mike Ferengi</span>
                                            <br>
                                            <span class=\"comment\"> {{ comment }}</span>
                                            <p><a href=\"#\">Reply</a></p>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/article_show.js') }}\"></script>
{% endblock %}", "article/show.html.twig", "/home/leonardoscuquejo/mystuff/symfony/the_spacebar/templates/article/show.html.twig");
    }
}

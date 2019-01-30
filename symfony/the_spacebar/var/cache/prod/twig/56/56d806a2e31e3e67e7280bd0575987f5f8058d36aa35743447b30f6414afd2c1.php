<?php

/* article/show.html.twig */
class __TwigTemplate_250c67f9ac616e3f28c648b98890d96bc286f610fb66b07fd77a0f765ddfba9e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Read: ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_toggle_heart", ["slug" => ($context["slug"] ?? null)]), "html", null, true);
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
        echo ($context["articleContent"] ?? null);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
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
    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/article_show.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  159 => 73,  154 => 72,  151 => 71,  141 => 64,  129 => 58,  122 => 54,  118 => 52,  114 => 51,  101 => 41,  94 => 37,  80 => 26,  69 => 18,  62 => 14,  57 => 12,  52 => 10,  44 => 4,  41 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article/show.html.twig", "/home/leonardoscuquejo/mystuff/symfony/the_spacebar/templates/article/show.html.twig");
    }
}

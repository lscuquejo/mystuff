<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'app_homepage', '_controller' => 'App\\Controller\\ArticleController::homepage'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/news/([^/]++)(?'
                        .'|(*:24)'
                        .'|/heart(*:37)'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            24 => array(array(array('_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'), array('slug'), null, null, false, true, null)),
            37 => array(array(array('_route' => 'article_toggle_heart', '_controller' => 'App\\Controller\\ArticleController::toggleArticleHeart'), array('slug'), array('POST' => 0), null, false, false, null)),
        );
    }
}

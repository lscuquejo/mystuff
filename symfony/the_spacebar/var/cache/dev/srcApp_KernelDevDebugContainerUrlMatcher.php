<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'app_article_homepage', '_controller' => 'App\\Controller\\ArticleController::homepage'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/news/([^/]++)(*:21)'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:56)'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            21 => array(array(array('_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'), array('slug'), null, null, false, true, null)),
            56 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
        );
    }
}

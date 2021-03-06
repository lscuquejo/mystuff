<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ArticleController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/ArticleController.php';

$this->services['App\Controller\ArticleController'] = $instance = new \App\Controller\ArticleController();

$instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'http_kernel' => array('services', 'http_kernel', 'getHttpKernelService', false),
    'parameter_bag' => array('privates', 'parameter_bag', 'getParameterBagService', false),
    'request_stack' => array('services', 'request_stack', 'getRequestStackService', false),
    'router' => array('services', 'router', 'getRouterService', false),
    'session' => array('services', 'session', 'getSessionService.php', true),
    'twig' => array('services', 'twig', 'getTwigService', false),
)))->withContext('App\\Controller\\ArticleController', $this));

return $instance;

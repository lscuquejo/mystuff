<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.template_cache_warmer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/TemplateIterator.php';

return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer(($this->privates['.service_locator.lSIKWsr'] ?? $this->load('get_ServiceLocator_LSIKWsrService.php'))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'/src'), array(), ($this->targetDirs[3].'/templates')));

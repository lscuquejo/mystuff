<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.5Ax_26O' shared service.

return $this->privates['.service_locator.5Ax_26O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'markdownHelper' => array('privates', 'App\\service\\MarkdownHelper', NULL, 'Cannot autowire service "App\\service\\MarkdownHelper": argument "$isDebug" of method "__construct()" is type-hinted "bool", you should configure its value explicitly.'),
));

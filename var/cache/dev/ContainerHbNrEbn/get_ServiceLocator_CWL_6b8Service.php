<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.cWL.6b8' shared service.

return $this->privates['.service_locator.cWL.6b8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'post' => ['privates', '.errored..service_locator.cWL.6b8.App\\Entity\\MicroPost', NULL, 'Cannot autowire service ".service_locator.cWL.6b8": it references class "App\\Entity\\MicroPost" but no such service exists.'],
], [
    'post' => 'App\\Entity\\MicroPost',
]);

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.HhMP273' shared service.

return $this->privates['.service_locator.HhMP273'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'userToFollow' => ['privates', '.errored..service_locator.HhMP273.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.HhMP273": it references class "App\\Entity\\User" but no such service exists.'],
], [
    'userToFollow' => 'App\\Entity\\User',
]);

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.IY8cFuq' shared service.

return $this->privates['.service_locator.IY8cFuq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'microPost' => ['privates', '.errored..service_locator.IY8cFuq.App\\Entity\\MicroPost', NULL, 'Cannot autowire service ".service_locator.IY8cFuq": it references class "App\\Entity\\MicroPost" but no such service exists.'],
], [
    'microPost' => 'App\\Entity\\MicroPost',
]);

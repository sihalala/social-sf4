<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.OjRmCn.' shared service.

return $this->privates['.service_locator.OjRmCn.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'userToUnfollow' => ['privates', '.errored..service_locator.OjRmCn..App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.OjRmCn.": it references class "App\\Entity\\User" but no such service exists.'],
], [
    'userToUnfollow' => 'App\\Entity\\User',
]);

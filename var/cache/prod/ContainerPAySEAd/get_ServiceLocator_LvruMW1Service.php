<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.LvruMW1' shared service.

return $this->privates['.service_locator.LvruMW1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'submission' => ['privates', '.errored..service_locator.LvruMW1.App\\Entity\\Submission', NULL, 'Cannot autowire service ".service_locator.LvruMW1": it references class "App\\Entity\\Submission" but no such service exists.'],
], [
    'submission' => 'App\\Entity\\Submission',
]);

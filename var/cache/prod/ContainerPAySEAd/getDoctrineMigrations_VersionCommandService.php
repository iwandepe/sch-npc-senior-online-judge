<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.version_command' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/VersionCommand.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsVersionDoctrineCommand.php';

$this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();

$instance->setName('doctrine:migrations:version');

return $instance;

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.command.lint' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Command/LintCommand.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bundle/Command/LintCommand.php';

$this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

$instance->setName('lint:twig');

return $instance;

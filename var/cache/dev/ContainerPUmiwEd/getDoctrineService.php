<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';

return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');

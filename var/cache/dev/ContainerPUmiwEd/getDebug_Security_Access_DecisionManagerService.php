<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.security.access.decision_manager' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManager.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/TraceableAccessDecisionManager.php';

return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
    yield 1 => ($this->privates['security.access.role_hierarchy_voter'] ?? $this->load('getSecurity_Access_RoleHierarchyVoterService.php'));
}, 2), 'affirmative', false, true));

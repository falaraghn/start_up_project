<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.json.login' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Firewall/UsernamePasswordJsonAuthenticationListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationSuccessHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Authentication/CustomAuthenticationFailureHandler.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationFailureHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

$a = ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService());

$this->privates['security.authentication.listener.json.login'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordJsonAuthenticationListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'login', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->load('getLexikJwtAuthentication_JwtManagerService.php')), $a), array(), 'login'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler($a), array()), array('check_path' => '/api/login_check', 'use_forward' => false, 'require_previous_session' => false, 'username_path' => 'username', 'password_path' => 'password'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), $a, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));

$instance->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('none'));

return $instance;

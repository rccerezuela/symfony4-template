<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/register')) {
                // admin_registration
                if ('/admin/register' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\RegistrationController::register',  '_route' => 'admin_registration',);
                }

                // admin_register
                if ('/admin/register' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\RegistrationController::admin_register',  '_route' => 'admin_register',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/login')) {
                // admin_login
                if ('/admin/login' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'admin_login',);
                }

                // admin_login_check
                if ('/admin/login_check' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\SecurityController::check',  '_route' => 'admin_login_check',);
                }

            }

            // admin_logout
            if ('/admin/logout' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\SecurityController::logout',  '_route' => 'admin_logout',);
            }

            // index
            if ('/admin/index' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::index',  '_route' => 'index',);
            }

        }

        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

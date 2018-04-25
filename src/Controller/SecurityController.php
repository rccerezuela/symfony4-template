<?php

// src/Controller/SecurityController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Provider\UserAuthenticationProvider;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class SecurityController extends Controller
{

	private $tokenManager;

    public function __construct(CsrfTokenManagerInterface $tokenManager = null)
    {
        $this->tokenManager = $tokenManager;
    }

	/**
	 * @Route("/admin/login", name="admin_login")
	 */
    public function login(Request $request, AuthenticationUtils $authenticationUtils)
    {
    	$session = $request->getSession();

        $authErrorKey = Security::AUTHENTICATION_ERROR;
        $lastUsernameKey = Security::LAST_USERNAME;

        $csrfToken = $this->tokenManager
	        ? $this->tokenManager->getToken('authenticate')->getValue()
	        : null;

	    //Llamamos al servicio de autenticacion
	    $authenticationUtils = $this->get('security.authentication_utils');
	     
	    // conseguir el error del login si falla
	    $error = $authenticationUtils->getLastAuthenticationError();
	 
	    // ultimo nombre de usuario que se ha intentado identificar
	    $lastUsername = $authenticationUtils->getLastUsername();
	     
	    return $this->renderLogin(array(
            'last_username' => $lastUsername,
            'error' => $error,
            'csrf_token' => $csrfToken,
        ));
	}

	public function check()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    public function logout()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }

	protected function renderLogin(array $data)
    {
        return $this->render('admin/security/login.html.twig', $data);
    }

}

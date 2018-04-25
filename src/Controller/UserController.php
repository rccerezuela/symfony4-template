<?php
// src/AppBundle/Controller/AdminController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

	/**
	 * @Route("/admin/index", name="index")
	 */
	public function index(){

		return $this->render('admin/index.html.twig');
	}
}

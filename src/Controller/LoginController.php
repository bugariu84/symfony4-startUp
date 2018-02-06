<?php
/**
 * Created by PhpStorm.
 * User: bbugariu
 * Date: 06.02.2018
 * Time: 22:29
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="auth_login")
     * @param Request $request
     */
    public function login(Request $request)
    {
        return $this->render('login/login.html.twig');
    }
}
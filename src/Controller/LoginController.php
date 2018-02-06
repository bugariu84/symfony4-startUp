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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login(Request $request)
    {
        // TODO: add login form
        return $this->render('login/login.html.twig');
    }
}
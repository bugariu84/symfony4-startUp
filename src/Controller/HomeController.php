<?php
/**
 * Created by PhpStorm.
 * User: bbugariu
 * Date: 06.02.2018
 * Time: 22:21
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        return $this->render('home/index.html.twig', ['hello' => 'Welcome to homepage']);
    }
}
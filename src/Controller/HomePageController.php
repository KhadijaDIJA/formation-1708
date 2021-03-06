<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/home", name="home_page")
     */
    public function index()
    {
        $var = "Hello world";
        return $this->render('home_page/index.html.twig', [
            'hello' => $var,
        ]);
    }
}

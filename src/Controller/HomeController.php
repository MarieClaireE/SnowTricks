<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;



class HomeController extends AbstractController {

    /**
     *  @var Environment
     */
    private $twig; 

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * Page d'acceuil
     * @Route("/home", name="accueil")
     */
    public function index(): Response
    {
        return new Response($this->twig->render('home/home.html.twig'));
    }
}

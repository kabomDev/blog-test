<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController
{
    /**
     * @Route("/", name="home")
     *
     */
    public function index(Environment $twig): Response
    {
        $html = $twig->render('home.html.twig');
        return new Response($html);
    }

    /**
     * @route("/hello/{name?World}", name="hello")
     *
     * @return Response
     */
    public function hello(string $name, Environment $twig): Response
    {
        $html = $twig->render(
            'hello.html.twig',
            [
                'prenom' => $name
            ]
        );
        return new Response($html);
    }
}

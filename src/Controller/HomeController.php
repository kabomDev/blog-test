<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use PDO;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController
{

    // /**
    //  * @Route("/test", name="test")
    //  * comment crée du contenu a ajouter dans la bdd
    //  */
    // public function test(EntityManagerInterface $em)
    // {
    //     $post = new Post;
    //     $post->setTitle("Mon premier article")
    //         ->setContent("Contenu du post")
    //         ->setCreatedAt(new DateTime());

    //     //suit les changement
    //     $em->persist($post);
    //     //enregistre en base de données
    //     $em->flush();
    //     dd($post);
    // }

    /**
     * @Route("/test", name="test")
     * comment récupérer du contenu dans la bdd
     */
    public function test(EntityManagerInterface $em, PostRepository $repository)
    {
        $posts = $repository->findAll();
        //$em->remove($post);
        //$em->flush();
        dd($posts);
    }


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
    public function hello(string $name, Environment $twig, PDO $db): Response
    {
        // $db = new \PDO('mysql:host=localhost;dbname=animaux;charset=utf8', 'root', '', [
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        // ]);

        $products = $db->query('SELECT * FROM animal')
            ->fetchAll(PDO::FETCH_ASSOC);

        $prenoms = ["Lior", "Magali", "Elise"];

        $eleves = [
            ['prenom' =>  'Renaud', 'nom' => 'Bordet'],
            ['prenom' =>  'Xavier', 'nom' => 'Vitali'],
            ['prenom' =>  'Anya', 'nom' => 'Attouchi']

        ];

        $formateur = ['prenom' => 'Lior', 'nom' => 'chamla'];

        $html = $twig->render(
            'hello.html.twig',
            [
                'prenoms' => $prenoms,
                'formateur' => $formateur,
                'eleves' => $eleves,
                'products' => $products
            ]
        );
        return new Response($html);
    }
}

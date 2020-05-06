<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/blog", name="post")
     */
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->findBy([], ['createdAt' => 'DESC'], 10);

        return $this->render('post/index.html.twig', [
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/blog/{id}",name="post_show")
     */
    public function show($id, PostRepository $postRepository)
    {
        $post = $postRepository->find($id);

        if (!$post) {
            throw $this->createNotFoundException();
        }

        return $this->render('post/show.html.twig', ['post'=> $post]);
    }
}

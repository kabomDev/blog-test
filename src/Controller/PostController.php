<?php

namespace App\Controller;

use DateTime;
use App\Entity\Post;
use App\Form\PostType;
use App\Form\CommentType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @Route("/blog", name="post_index")
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
    public function show(Post $post, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(CommentType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var \App\Entity\Comment
             */
            $comment = $form->getData();

            $comment
                ->setCreatedAt(new DateTime())
                ->setPost($post);

            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('post_show', ['id' => $post->getId()]);
        }

        return $this->render('post/show.html.twig', [
            'post' => $post,
            'commentForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/create", name="post_create")
     */
    public function create(Request $request, EntityManagerInterface $em, UrlGeneratorInterface $generator)
    {

        $form = $this->createForm(PostType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            /**
             * @var \App\Entity\Post
             */
            $post = $form->getData();
            $post->setCreatedAt(new DateTime());

            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('post_show', [
                'id' => $post->getId()
            ]);
        }

        return $this->render('post/create.html.twig', [
            'postForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/edit/{id}", name="post_edit")
     */
    public function edit(Post $post, Request $request, EntityManagerInterface $em)
    {
        //on crée un formulaire
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('post_show', [
                'id' => $post->getId()
            ]);
        }

        //on affiche le formulaire
        return $this->render('post/edit.html.twig', [
            'postForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/delete/{id}", name="post_delete")
     *
     * @return void
     */
    public function delete(Post $post, EntityManagerInterface $em)
    {
        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute("post_index");
    }
}

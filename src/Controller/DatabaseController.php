<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DatabaseController extends AbstractController
{
    /**
     * @Route("/database", name="database")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $post = new Post();

        $post->setAutor(1);
        $post->setCreatedAt(new \DateTime("now"));
        $post->setDescription("My first post on that website");
        $post->setPhoto("/images/img.jpg");
        $post->setText("Text");
        $post->setTitle("Title");

        $entityManager->persist($post);
        $entityManager->flush();

        return new Response("Created entity with id =".$post->getId());
    }


    /**
     * @Route("/createpost", name="createpost")
     */
    public function createPost(){
        $entityManager = $this->getDoctrine()->getManager();
        $post = new Post();

        $post->setAutor(1);
        $post->setCreatedAt(new \DateTime("now"));
        $post->setDescription($_POST["Description"]);
        $post->setPhoto($_POST["Photo"]);
        $post->setText($_POST["Text"]);
        $post->setTitle($_POST["Title"]);


        $entityManager->persist($post);
        $entityManager->flush();

        return new Response("Created entity with id =".$post->getId());
    }

    /**
     * @Route("/createpostform", name="createpostform")
     */

    public function createpostform(){
        return $this->render('database/createpostform.html.twig',
            [

            ]);
    }

    /**
     * @Route("/post/{id}", name="get_post")
     */
    public function getPost($id){

        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);

        return new Response($post->getTitle());
    }

}









<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        $a = 5;
        $b = 128;
        $c = $a * $b;
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'hello' => "Hello world",
            'calculated' => $c,
        ]);
    }

    /**
     * @Route("/post", name="post")
     */

    public function postAction(){

        $post = "post";

        return $this->render( 'post/post.html.twig' ,
        [
            'post' => $post,
        ]);

    }

    /**
     * @Route("/posts", name="posts")
     */

    public function postsAction(){

        $text = "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. ";


        return $this->render( 'post/posts.html.twig' ,
            [
            'post' => $text,
            ]);

    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(){

        $about = "Этот сайт является " ;

        return $this->render('post/about.html.twig', [
        'about' => $about,
        ]);


    }


}

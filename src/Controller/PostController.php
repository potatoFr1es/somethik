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

        $postsList = "number of list";

        return $this->render( 'post/posts.html.twig' ,
            [
                'posts' => $postsList,
            ]);

    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(){

        $about = "" ;

        return $this->render('post/about.html.twig', [
        'about' => $about,
        ]);


    }


}

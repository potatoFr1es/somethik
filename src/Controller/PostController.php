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


        return $this->render('post/index.html.twig', [
            'r' => require "C:\Users\torbe\projects\test\public\php\db.php",
        ]);
    }

    /**
     * @Route("/post", name="post")
     */

    public function postAction()
    {

        $footer = "Пытаюсь сдклать сайт за один день ради этого я не пошел в школу";

        $post = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dapibus at nibh pretium elementum. Integer sodales justo lacus, sed varius arcu rutrum a. Cras cursus enim quam, eget auctor sapien laoreet non. In mi lectus, aliquam eu vulputate venenatis, commodo gravida eros. Nunc tincidunt mauris id elit mollis congue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce et orci et mauris vulputate porta. Suspendisse sodales non libero vitae venenatis. Cras venenatis, tortor a maximus commodo, nisi elit malesuada lorem, non sollicitudin lectus nibh at lectus. Etiam sit amet accumsan lectus, eget sodales tortor. Nunc quam risus, suscipit eu purus at, tristique posuere ipsum.

In tortor ante, condimentum eu nibh ut, porttitor convallis eros. Nullam tincidunt facilisis sem, sed hendrerit mi. Sed faucibus tincidunt nunc, auctor tincidunt magna. Vivamus blandit condimentum augue, nec tincidunt justo faucibus a. Vivamus suscipit sapien tortor, sed elementum odio consequat eget. Phasellus vestibulum eu elit sed efficitur. Praesent ac congue tortor. Aenean lacinia scelerisque eros vitae dignissim. Donec tincidunt, lorem sit amet tristique congue, diam odio sodales tortor, et fermentum justo lacus placerat est. Nullam ut neque lacus.

Integer rutrum magna sapien, a porta nulla convallis sit amet. Fusce in ante id ante rhoncus pharetra. Pellentesque vel urna porta ante congue volutpat non eget ligula. Vivamus vitae convallis mi, non condimentum mauris. Mauris eget mauris eleifend, vehicula nisi nec, fringilla ligula. Pellentesque facilisis enim ut tellus imperdiet scelerisque. Sed fringilla libero erat, non feugiat lorem eleifend euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

Morbi vestibulum posuere arcu, sed vehicula libero cursus sit amet. In congue, ipsum et venenatis feugiat, arcu tellus accumsan enim, eu pretium nisl leo ac leo. Sed finibus suscipit mauris, id varius mi faucibus quis. Nam aliquam massa at bibendum imperdiet. Integer at nibh est. Donec ac neque sagittis, posuere mauris sed, dignissim ipsum. Mauris viverra posuere rutrum. Quisque consectetur efficitur tempus. Aenean facilisis pellentesque velit, cursus pulvinar justo porttitor id. In hac habitasse platea dictumst. Sed ex elit, vehicula et risus eget, facilisis mollis tortor. Curabitur ut urna et velit pretium auctor. Ut sollicitudin tristique hendrerit. Nullam sodales scelerisque condimentum. Nam non lacinia nulla. Duis vehicula eget justo sed hendrerit.

Maecenas sit amet leo tortor. Duis tristique id ex et vestibulum. Phasellus non risus tortor. Sed efficitur eros nulla, ac congue diam aliquet ut. Nam sollicitudin mauris ut odio ultrices molestie. Cras suscipit, lorem eget auctor fringilla, ligula nisl sagittis nisl, ac suscipit dolor arcu quis nibh. Sed pretium rhoncus lectus, in bibendum sapien aliquam eu. Fusce quis quam eget nunc efficitur mollis sit amet nec dolor.";

        return $this->render('post/post.html.twig',
            [
                'post' => $post, 'footer' => $footer,
            ]);

    }

    /**
     * @Route("/posts", name="posts")
     */

    public function postsAction()
    {

        $text = "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. ";


        return $this->render('post/posts.html.twig',
            [
                'post' => $text,
            ]);

    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {

        $about = "Этот сайт является ";

        return $this->render('post/about.html.twig', [
            'about' => $about,
        ]);


    }


    /**
     * @Route("/createpost2", name="createpos3t")
     */

    public function createpostAction()
    {

        return $this->render('post/createpost.html.twig', [

        ]);


    }
}




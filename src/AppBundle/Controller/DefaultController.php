<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/new_post.html.twig', [
            "title" => "New Post"
        ]);
    }

    /**
     * @Route("/feed", name="homepage")
     */
    public function feedAction(Request $request)
    {
        //TODO: get all posts and render twig file with posts

    }

    //TODO: Make action to handle form submission

}

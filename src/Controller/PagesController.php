<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="pages")
     */
    public function index()
    {
        return $this->render('pages/home.html.twig');
    }
    /**
     * @Route("/about-us")
     */
    public function about()
    {
        return $this->render('pages/about.html.twig');
    }
}

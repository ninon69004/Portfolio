<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="index")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
    /**
     * @Route("/exp", name="expPro")
     */
    public function expPro(): Response
    {
        return $this->render('home/exp.html.twig');
    }
    /**
     * @Route("/hobbies", name="hobbies")
     */
    public function hobbies(): Response
    {
        return $this->render('home/hobbies.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function form(): Response
    {
        return $this->render('contact/contact.html.twig');
    }
}

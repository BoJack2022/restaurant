<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('test/home.html.twig'
        );
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('test/about.html.twig'
          
        );
    }
    #[Route('/sign', name: 'app_sign')]
    public function sign(): Response
    {
        return $this->render('test/sign.html.twig', [
          
        ]);
    }

    #[Route('/book', name: 'app_book')]
    public function book(): Response
    {
        return $this->render('test/book.html.twig');
    }



    
}

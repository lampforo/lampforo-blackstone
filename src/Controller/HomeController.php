<?php

namespace App\Controller;

use App\Entity\Subscribe;
use App\Form\SubscribeFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
      #[Route('/', name: 'home')]
    public function index(Request $request): Response
    {  
        

        return $this->render('home/index.html.twig', [
          'controller_name' => 'HomeController',
          // 'form' => $form->createView()
      ]);
    }  
   
    
    
}

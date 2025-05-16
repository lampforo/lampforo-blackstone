<?php

namespace App\Controller;

use App\Entity\Subscribe;
use App\Form\SubscribeFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubcategoryFreeController extends AbstractController
{
      #[Route('/subcategoryfree', name: 'subcategoryfree')]
    public function index(Request $request): Response
    {  
        

        return $this->render('subcategoryfree/index.html.twig', [
          'controller_name' => 'SubcategoryFreeController',
          // 'form' => $form->createView()
      ]);
    }  
   
    
    
}

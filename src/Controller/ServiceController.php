<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    //methode show pour prendre en parametre name et l'affiche
    #[Route("/show/{name}",name:'show_name')]
    public function show($name){
        return $this->render('/service/show.html.twig', [
            'name' => $name
        ]);
    }
    #[Route("/index",name:'go-to-index')]
    public function goToIndex(){
        return $this->redirectToRoute('msg');
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    #[Route('/show/{name}', name:"show_author")]
    public function showAuthor($name)
    {
        return $this->render('author/show.html.twig', [
            "name" => $name
        ]);
    }
    public $authors = array(
        array('id' => 1, 'picture' => '/images/Victor.jpg','username' => 'Victor Hugo', 'email' =>
        'victor.hugo@gmail.com ', 'nb_books' => 100),
        array('id' => 2, 'picture' => '/images/william.jpg','username' => ' William Shakespeare', 'email' =>
        ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
        array('id' => 3, 'picture' => '/public/images/taha.jpg','username' => 'Taha Hussein', 'email' =>
        'taha.hussein@gmail.com', 'nb_books' => 300),
        );
    #[Route('/listAuthor', name:"list_author")]
    public function listAuthors() {
        return $this->render('author/list.html.twig', [
            "data" => $this->authors
        ]);
    }
    #[Route('/detail/{id}', name:"details")]
    public function details($id)
    {
        $author = $this->authors[$id-1];
        //-1 khater id fl tableau ybda mn 0 
        return $this->render('author/detail.html.twig', [
            "auteur" => $author
        ]);
    }
}

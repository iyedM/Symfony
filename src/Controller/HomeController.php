<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/message', name:"msg")]
    public function message(): Response
    {
        return $this->render('home/message.html.twig');
    }
    #[Route('/affichage/{age}')]
    public function age($age) {
        return $this->render('home/page.html.twig', [
            "a" => $age   // behy hethy bech ta5edh age w bech naffichouh, fi twig moch bech nktbou esm variable bech na3mlou a hthika
            //mithel ken nbadlou fi 3oudh a nektbou fatma bech nst3mlouha hiya fi twig
            //tw awl 7aja n3mlou fichie twig
            //najmou n3mlou esm wlla aya haja tkoun parametre
        ]);
    }

}
//heka fi lwl tetsna3 wa7adha fichier , fi wast l class n3mlou les methodes li homa fonctionnet
//hthika dima tkoun ma3moula fi lwl wahadha tw 7ni bech n3mlou fonction okhra 
    //nmchou tw ll dossier home nasn3ou fichier hthika 
//ken mafhemtich haja ab3thili msg fl messenger 
// tw tan3mlou fonction parametré, nhottou fl route mithel age w tkharrejlna hiya fl twig

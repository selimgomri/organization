<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use App\Service\Organization;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]

   
    public function index(Organization $display): Response
    {
        dd($display->getHappyMessage());
        return $this->render('home/index.html.twig', [
            'display' => $display
        ]);
    }
}
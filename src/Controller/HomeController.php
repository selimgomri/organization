<?php

namespace App\Controller;

use App\Service\Organization;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]

   
    public function index(Organization $datas): Response
    {
        $datas=$datas->getOrganization();
        $datas=$datas['organizations'];
        /* foreach ($datas as $data) {
            dd($data);
        } */
        //dd($datas);
        return $this->render('home/index.html.twig', [
            'datas' => $datas

        ]);
    }
}
<?php

namespace App\Controller;

use App\Service\Organization;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditController extends AbstractController
{
    #[Route('/edit/{id}', name: 'edit', requirements:['id' => "[0-9]+"])]
    public function index(Organization $datas, int $id): Response
    {
        $datas=$datas->toEditOrganization($id);

        return $this->render('edit/index.html.twig', [
            'datas' => $datas
        ]);
    }
}
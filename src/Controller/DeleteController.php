<?php

namespace App\Controller;

use App\Service\Organization;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class DeleteController extends AbstractController
{
    #[Route('/delete/{id}', name: 'delete', requirements:['id' => "[0-9]+"])]
    public function index(Organization $datas, int $id): RedirectResponse
    {
        $datas->deleteOrganization($id);

        return $this->redirectToRoute('home');
    }
}
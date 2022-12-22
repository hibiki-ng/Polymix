<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductionsController extends AbstractController
{
    #[Route('/productions', name: 'app_productions')]
    public function index(): Response
    {
        return $this->render('productions/index.html.twig', [
            'controller_name' => 'ProductionsController',
        ]);
    }
}

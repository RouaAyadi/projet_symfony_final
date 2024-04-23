<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductssController extends AbstractController
{
    #[Route('/productss', name: 'app_productss')]
    public function index(): Response
    {
        return $this->render('productss/index.html.twig', [
            'controller_name' => 'ProductssController',
        ]);
    }
}

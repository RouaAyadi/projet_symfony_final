<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlaceOrderController extends AbstractController
{
    #[Route('/placeorder', name: 'app_place_order')]
    public function index(): Response
    {
        return $this->render('place_order/index.html.twig', [
            'controller_name' => 'PlaceOrderController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotelRoomsController extends AbstractController
{
    /**
     * @Route("/hotel/rooms", name="hotel_rooms")
     */
    public function index(): Response
    {
        return $this->render('hotel_rooms/index.html.twig', [
            'controller_name' => 'HotelRoomsController',
        ]);
    }
}

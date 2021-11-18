<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[route('/', name: 'app_homepage')]
    public function index(): response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'homecontroller',
        ]);
    }
}

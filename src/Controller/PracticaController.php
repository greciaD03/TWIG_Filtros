<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PracticaController extends AbstractController
{
    #[Route('/practica', name: 'app_practica')]
    public function index(): Response
    {
        return $this->render('practica/index.html.twig', [
            'controller_name' => 'PracticaController',
            'num' => '{% set number = 5 %}',
            'text' => '{% set items = [¡Hola, Mundo, !, 😄] %}',
            'forma' => '{% for row in items|batch(3, 💥) %}',
            'word' => '{{ wELCOME!|capitalize }}',
        ]);
    }
}

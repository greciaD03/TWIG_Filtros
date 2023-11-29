<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwigController extends AbstractController
{
    #[Route('/twig', name: 'app_twig')]
    public function index(): Response
    {
        return $this->render('twig/index.html.twig', [
            'controller_name' => 'TwigController',
            'etiquetas' => '{{ name|striptags|title }}',
            'lista1' => '{% set numbers = [5, 2, 6, 23, 8, 3, 8]%}',
            'lista2' => '{% set num = [8, 15, 2, 7, 4, 12, 5]%}',
        ]);
    }
    public function getFilters(): array
    {
        return [
            new TwigFilter('price', [$this, 'formatPrice']),
        ];
    }
}

<?php

namespace App\Controller;

use App\Entity\Squirell;
use App\Repository\SquirellRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirellRepository $squirellRepository): Response
    {
        $squirell=$squirellRepository -> findAll();
        return $this->render('home/index.html.twig', ['squirell' => $squirell]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PortfolioController extends AbstractController
{
    #[Route('/', name: 'portfolio')]
    public function home(): Response
    {
        return $this->render('portfolio/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/learnings', name: 'learnings')]
    public function learnings(): Response
    {
        return $this->render('portfolio/learnings.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/experiences', name: 'experiences')]
    public function experiences(): Response
    {
        return $this->render('portfolio/experiences.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('portfolio/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


}

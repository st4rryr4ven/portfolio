<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProjectsController extends AbstractController
{
    #[Route('/projects', name: 'projects')]
    public function index(): Response
    {
        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }


    #[Route('/projects/gestaff', name: 'project_gestaff')]
    public function gestaff(): Response
    {
        return $this->render('projects/gestaff.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }


    #[Route('/projects/sconote', name: 'project_sconote')]
    public function sconote(): Response
    {
        return $this->render('projects/sconote.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }

    #[Route('/projects/trains', name: 'project_trains')]
    public function trains(): Response
    {
        return $this->render('projects/trains.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }

    #[Route('/projects/myavatar', name: 'project_myavatar')]
    public function myavatar(): Response
    {
        return $this->render('projects/myavatar.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }

    #[Route('/projects/melovibes', name: 'project_melovibes')]
    public function melovibes(): Response
    {
        return $this->render('projects/melovibes.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }
}


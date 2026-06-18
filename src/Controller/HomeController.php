<?php

namespace App\Controller;

use App\Portfolio\PortfolioContent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('pages/home.html.twig', [
            'identity' => PortfolioContent::identity(),
            'services' => PortfolioContent::services(),
            'steps' => PortfolioContent::methodology(),
            'projects' => PortfolioContent::projects(),
            'expertises' => PortfolioContent::expertises(),
        ]);
    }

    #[Route('/projets/{slug}', name: 'app_project_show')]
    public function project(string $slug): Response
    {
        $project = PortfolioContent::project($slug);

        if ($project === null) {
            throw $this->createNotFoundException();
        }

        return $this->render('pages/project.html.twig', [
            'identity' => PortfolioContent::identity(),
            'project' => $project,
        ]);
    }
}

<?php

namespace App\Controller;

use App\Repository\AboutRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/{_locale<%app.supported_locales%>}')]
class AboutController extends AbstractController
{

    #[Route('/a-propos', name: 'app_about')]
    public function index(AboutRepository $aboutRepository): Response
    {
        $abouts = $aboutRepository->findAll();

        return $this->render('about/index.html.twig', [
            'abouts' => $abouts,
        ]);
    }
}

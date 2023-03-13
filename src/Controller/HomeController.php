<?php

namespace App\Controller;

use App\Repository\AboutRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function indexNoLocale(): Response
    {
        return $this->redirectToRoute('app_home');
    }
    #[Route('/{_locale<%app.supported_locales%>}', name: 'app_home')]
    public function index(AboutRepository $aboutRepository): Response
    {
        $about = $aboutRepository->findOneBy(["id"=> 1]);
        return $this->render('home/index.html.twig', [
            'about'=> $about
        ]);
    }
}

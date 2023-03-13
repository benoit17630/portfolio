<?php

namespace App\Controller;

use App\Repository\Rgbd\LegalMentionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/{_locale<%app.supported_locales%>}')]
class LegalMentionController extends AbstractController
{
    #[Route('/mention-legale', name: 'app_legal_mention')]
    public function index(LegalMentionRepository $legalMentionRepository): Response
    {
        $mentions = $legalMentionRepository->findAll();
        return $this->render('legal_mention/index.html.twig', [
            'mentions' => $mentions,
        ]);
    }
}

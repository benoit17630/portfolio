<?php

namespace App\Controller;

use App\Repository\Rgbd\privacyPolicyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/{_locale<%app.supported_locales%>}')]
class PrivacyPolicyController extends AbstractController
{
    #[Route('/politique-de-confidentialite', name: 'app_privacy_policy')]
    public function index(privacyPolicyRepository $privacyPolicyRepository): Response
    {
        $privacies = $privacyPolicyRepository->findAll();
        return $this->render('privacy_policy/index.html.twig', [
            'privacies'=> $privacies
        ]);
    }
}

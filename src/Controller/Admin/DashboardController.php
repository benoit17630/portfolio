<?php

namespace App\Controller\Admin;

use App\Entity\About;
use App\Entity\Contact\Contact;
use App\Entity\Rgbd\LegalMention;
use App\Entity\Rgbd\privacyPolicy;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');


    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::subMenu('RGBD', )
            ->setSubItems([
                MenuItem::linkToCrud('Privacy Policy', '', privacyPolicy::class),
                MenuItem::linkToCrud('Legal mention', '', LegalMention::class)
            ]);
        yield MenuItem::linkToCrud('about', '', About::class);
        yield MenuItem::linkToCrud("Contact", '', Contact::class);
    }
}

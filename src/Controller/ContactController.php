<?php

namespace App\Controller;


use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/{_locale<%app.supported_locales%>}')]
class ContactController extends AbstractController
{
    public function __construct(
        private readonly TranslatorInterface $translator
    )
    {
    }

    #[Route('/contact', name: 'app_contact')]
    public function index(
        Request $request,
        EntityManagerInterface $manager,
        MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();
            $manager->persist($contact);
            $manager->flush();
            $this->addFlash('success', $this->translator->trans('Your request has been sent'));
            $email = new TemplatedEmail();
            $email
                ->from($contact->getEmail())
                ->to(new Address('contact@benoitmenier.fr', 'contact'))
                ->subject($contact->getTitle())
                ->htmlTemplate('contact/email.html.twig')
                ->context([
                    "name"=> $contact->getFullName(),
                    "message"=> $contact->getMessage(),
                    "sujet"=> $contact->getTitle(),
                    "mail"=> $contact->getEmail()
                ])
            ;

        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

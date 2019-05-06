<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function pageAccueil()
    {
        return $this->render('Pages/accueil.html.twig');
    }

    /**
     * @Route("/fuerteventura", name="fuert", methods="GET")
     */
    public function fuerteventura()
    {
        return $this->render('Pages/fuert.html.twig');
    }

    /**
     * @Route("/concept_contact", name="concept", methods="GET")
     */
    public function concept_contact()
    {
        return $this->render('Pages/contact/concept.html.twig');
    }

    /**
     * @Route("/contact", name="contact", methods="GET")
     */
    public function contact(): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        return $this->render('Pages/contact/contact.html.twig', ['form' => $form->createView()
        ]);
    }
}

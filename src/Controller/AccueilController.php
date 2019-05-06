<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/concept-contact", name="concept", methods="GET")
     */
    public function concept_contact()
    {
        return $this->render('Pages/contact/concept.html.twig');
    }

    /**
     * @Route("/contact-info", name="contact_info", methods="GET")
     */
    public function contact_info()
    {
        return $this->render('Pages/contact/contact.html.twig');
    }
}

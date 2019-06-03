<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Entity\Client;
use App\Entity\SurfCamp;
use App\Entity\SurfCampFuert;
use App\Form\ClientType;
use App\Form\SurfCampType;
use App\Form\SurfCampFuertType;
use App\Repository\ContactRepository;
use App\Repository\ClientRepository;
use App\Repository\SurfCampRepository;
use App\Repository\SurfCampFuertRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Notification\ContactNotification;
use App\Notification\ClientNotification;
use Symfony\Component\Asset\Package;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function pageAccueil()
    {
        return $this->render('pages/accueil.html.twig');
    }

/*     public function menuSurf(SurfCampRepository $surfCampRepo)
    {
        $surf = $surfCampRepo->findAll();
        $this->render('structure/header.html.twig', [
            'surf_camps' => $surf, ]);
    } */

    /**
     * @Route("/fuerteventura", name="fuert", methods="GET")
     */
    public function fuerteventura()
    {
        return $this->render('pages/fuert.html.twig');
    }

    /**
     * @Route("/concept_contact", name="concept", methods="GET")
     */
    public function concept_contact()
    {
        return $this->render('pages/contact/concept.html.twig');
    }

    /**
     * @Route("/contact", name="contact", methods="GET")
     */
    public function contact(Request $request, ContactNotification $notification): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $notification->notify($contact);
            $this->addFlash('success', 'Votre email a bien été envoyé');
            return $this->redirectToRoute('contact');
        }

        return $this->render('pages/contact/contact.html.twig', ['form' => $form->createView()
        ]);
    }

    /**
     * @Route("/reserver", name="reserver", methods="GET")
     */
    public function reserver(Request $request, ClientNotification $notification_res): Response
    {
        $client = new Client();
        $form_res = $this->createForm(ClientType::class, $client);
        $form_res->handleRequest($request);

        if($form_res->isSubmitted() && $form_res->isValid()){
            $notification_res->notify($client);
            $this->addFlash('success', 'Votre email a bien été envoyé');
            return $this->redirectToRoute('reserver');
        }

        return $this->render('pages/reservation/reserver.html.twig', ['form_res' => $form_res->createView()
        ]);
    }

    /**
     * @Route("/surf-camps", name="presentation_surfcamps", methods="GET")
     */
    public function presentationSurfcamps(SurfCampRepository $surfCampRepo, SurfCampFuertRepository $surfCampFuertRepo)
    {
        return $this->render('pages/presentationSurfCamps.html.twig', [
            'surf_camps' => $surfCampRepo->findAll(),
            'surf_camp_fuerts' => $surfCampFuertRepo->findAll(),
        ]);
    }
    
    /**
     * @Route("/sejour-surf-groupes", name="groupe", methods="GET")
     */
    public function groupe(SurfCampRepository $surfCampRepo, SurfCampFuertRepository $surfCampFuertRepo)
    {
        return $this->render('pages/groupe.html.twig', [
            'surf_camps' => $surfCampRepo->findAll(),
            'surf_camp_fuerts' => $surfCampFuertRepo->findAll(),
        ]);
    }
}

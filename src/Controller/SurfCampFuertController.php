<?php

namespace App\Controller;

use App\Entity\SurfCampFuert;
use App\Form\SurfCampFuertType;
use App\Repository\SurfCampFuertRepository;
use App\Repository\ActiviteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Notification\ClientNotification;
use App\Entity\Client;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Symfony\Compnent\HttpFoundation\File\File;

class SurfCampFuertController extends AbstractController
{
    /**
     * @Route("/admin/surfCamp-fuert/", name="surf_camp_fuert_index", methods={"GET"})
     */
    public function index(SurfCampFuertRepository $surfCampFuertRepository): Response
    {
        return $this->render('surf_camp_fuert/index.html.twig', [
            'surf_camp_fuerts' => $surfCampFuertRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/surfCamp-fuert/new", name="surf_camp_fuert_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $surfCampFuert = new SurfCampFuert();
        $form = $this->createForm(SurfCampFuertType::class, $surfCampFuert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($surfCampFuert);
            $entityManager->flush();

            return $this->redirectToRoute('surf_camp_fuert_index');
        }

        return $this->render('surf_camp_fuert/new.html.twig', [
            'surf_camp_fuert' => $surfCampFuert,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="surf_camp_fuert_show", methods={"GET"})
     */
    public function show(ActiviteRepository $activiteRepository, SurfCampFuert $surfCampFuert, Request $request, ClientNotification $notification_res): Response
    {
        $client = new Client();
        $form_res = $this->createForm(ClientType::class, $client);
        $form_res->handleRequest($request);

        if($form_res->isSubmitted() && $form_res->isValid()){
            $notification_res->notify($client);
            $this->addFlash('success', 'Votre email a bien été envoyé');
            return $this->redirectToRoute('reserver');
        }
        
        return $this->render('surf_camp_fuert/show.html.twig', [
            'surf_camp_fuert' => $surfCampFuert, 'form_res' => $form_res->createView(),
            'activite' => $activiteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/surfCamp-fuert/{id}/edit", name="surf_camp_fuert_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SurfCampFuert $surfCampFuert): Response
    {
        $form = $this->createForm(SurfCampFuertType::class, $surfCampFuert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('surf_camp_fuert_index', [
                'id' => $surfCampFuert->getId(),
            ]);
        }

        return $this->render('surf_camp_fuert/edit.html.twig', [
            'surf_camp_fuert' => $surfCampFuert,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/surfCamp-fuert/{id}", name="surf_camp_fuert_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SurfCampFuert $surfCampFuert): Response
    {
        if ($this->isCsrfTokenValid('delete'.$surfCampFuert->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($surfCampFuert);
            $entityManager->flush();
        }

        return $this->redirectToRoute('surf_camp_fuert_index');
    }
}

<?php

namespace App\Controller;

use App\Entity\SurfCamp;
use App\Form\SurfCampType;
use App\Repository\SurfCampRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Notification\ClientNotification;
use App\Entity\Client;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Compnent\HttpFoundation\File\File;


class SurfCampController extends AbstractController
{
    /**
     * @Route("/admin/surf-camp/", name="surf_camp_index", methods={"GET"})
     */
    public function index(SurfCampRepository $surfCampRepository): Response
    {
        return $this->render('surf_camp/index.html.twig', [
            'surf_camps' => $surfCampRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/surf-camp/new", name="surf_camp_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $surfCamp = new SurfCamp();
        $form = $this->createForm(SurfCampType::class, $surfCamp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image1')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $surfCamp->setImage1($filename);

            $file = $form->get('image2')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $surfCamp->setImage2($filename);

            $file = $form->get('image3')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $surfCamp->setImage3($filename);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($surfCamp);
            $entityManager->flush();

            return $this->redirectToRoute('surf_camp_index');
        }

        return $this->render('surf_camp/new.html.twig', [
            'surf_camp' => $surfCamp,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/surf-camp/{id}", name="surf_camp_show", methods={"GET"})
     */
    public function show(SurfCamp $surfCamp, Request $request, ClientNotification $notification_res): Response
    {
        $client = new Client();
        $form_res = $this->createForm(ClientType::class, $client);
        $form_res->handleRequest($request);

        if($form_res->isSubmitted() && $form_res->isValid()){
            $notification_res->notify($client);
            $this->addFlash('success', 'Votre email a bien été envoyé');
            return $this->redirectToRoute('reserver');
        }
        
        return $this->render('surf_camp/show.html.twig', [
            'surf_camp' => $surfCamp, 'form_res' => $form_res->createView()
        ]);
    }

    /**
     * @Route("/admin/surf-camp/{id}/edit", name="surf_camp_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SurfCamp $surfCamp): Response
    {
        $form = $this->createForm(SurfCampType::class, $surfCamp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image1')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $surfCamp->setImage1($filename);

            $file = $form->get('image2')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $surfCamp->setImage2($filename);

            $file = $form->get('image3')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $surfCamp->setImage3($filename);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('surf_camp_index', [
                'id' => $surfCamp->getId(),
            ]);
        }

        return $this->render('surf_camp/edit.html.twig', [
            'surf_camp' => $surfCamp,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/surf-camp/{id}", name="surf_camp_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SurfCamp $surfCamp): Response
    {
        if ($this->isCsrfTokenValid('delete'.$surfCamp->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($surfCamp);
            $entityManager->flush();
        }

        return $this->redirectToRoute('surf_camp_index');
    }
}

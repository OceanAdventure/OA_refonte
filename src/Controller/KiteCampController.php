<?php

namespace App\Controller;

use App\Entity\KiteCamp;
use App\Form\KiteCampType;
use App\Repository\KiteCampRepository;
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

/**
 * @Route("/kite/camp")
 */
class KiteCampController extends AbstractController
{
    /**
     * @Route("/", name="kite_camp_index", methods={"GET"})
     */
    public function index(KiteCampRepository $kiteCampRepository): Response
    {
        return $this->render('kite_camp/index.html.twig', [
            'kite_camps' => $kiteCampRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="kite_camp_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $kiteCamp = new KiteCamp();
        $form = $this->createForm(KiteCampType::class, $kiteCamp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $kiteCamp->setImage($filename);

            $file = $form->get('image2')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $kiteCamp->setImage2($filename);

            $file = $form->get('image3')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $kiteCamp->setImage3($filename);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($kiteCamp);
            $entityManager->flush();

            return $this->redirectToRoute('kite_camp_index');
        }

        return $this->render('kite_camp/new.html.twig', [
            'kite_camp' => $kiteCamp,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="kite_camp_show", methods={"GET"})
     */
    public function show(KiteCamp $kiteCamp, Request $request, ClientNotification $notification_res): Response
    {
        $client = new Client();
        $form_res = $this->createForm(ClientType::class, $client);
        $form_res->handleRequest($request);

        if($form_res->isSubmitted() && $form_res->isValid()){
            $notification_res->notify($client);
            $this->addFlash('success', 'Votre email a bien été envoyé');
            return $this->redirectToRoute('reserver');
        }

        return $this->render('kite_camp/show.html.twig', [
            'kite_camp' => $kiteCamp, 'form_res' => $form_res->createView()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="kite_camp_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, KiteCamp $kiteCamp): Response
    {
        $form = $this->createForm(KiteCampType::class, $kiteCamp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('kite_camp_index', [
                'id' => $kiteCamp->getId(),
            ]);
        }

        return $this->render('kite_camp/edit.html.twig', [
            'kite_camp' => $kiteCamp,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="kite_camp_delete", methods={"DELETE"})
     */
    public function delete(Request $request, KiteCamp $kiteCamp): Response
    {
        if ($this->isCsrfTokenValid('delete'.$kiteCamp->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($kiteCamp);
            $entityManager->flush();
        }

        return $this->redirectToRoute('kite_camp_index');
    }
}

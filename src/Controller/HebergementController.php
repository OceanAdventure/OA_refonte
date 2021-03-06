<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Form\HebergementType;
use App\Repository\HebergementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HebergementController extends AbstractController
{
    /**
     * @Route("/admin/hebergement/", name="hebergement_index", methods={"GET"})
     */
    public function index(HebergementRepository $hebergementRepository): Response
    {
        return $this->render('hebergement/index.html.twig', [
            'hebergements' => $hebergementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/hebergement/new", name="hebergement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $hebergement = new Hebergement();
        $form = $this->createForm(HebergementType::class, $hebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image1')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $hebergement->setImage1($filename);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($hebergement);
            $entityManager->flush();

            return $this->redirectToRoute('hebergement_index');
        }

        return $this->render('hebergement/new.html.twig', [
            'hebergement' => $hebergement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/hebergement/{id}", name="hebergement_show", methods={"GET"})
     */
    public function show(Hebergement $hebergement): Response
    {
        return $this->render('hebergement/show.html.twig', [
            'hebergement' => $hebergement,
        ]);
    }

    /**
     * @Route("/admin/hebergement/{id}/edit", name="hebergement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Hebergement $hebergement): Response
    {
        $form = $this->createForm(HebergementType::class, $hebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image1')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $hebergement->setImage1($filename);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hebergement_index', [
                'id' => $hebergement->getId(),
            ]);
        }

        return $this->render('hebergement/edit.html.twig', [
            'hebergement' => $hebergement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/hebergement/{id}", name="hebergement_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Hebergement $hebergement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hebergement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hebergement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('hebergement_index');
    }
}

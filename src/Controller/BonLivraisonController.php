<?php

namespace App\Controller;

use App\Entity\BonLivraison;
use App\Form\BonLivraisonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bon/livraison")
 */
class BonLivraisonController extends AbstractController
{
    /**
     * @Route("/", name="bon_livraison_index", methods={"GET"})
     */
    public function index(): Response
    {
        $bonLivraisons = $this->getDoctrine()
            ->getRepository(BonLivraison::class)
            ->findAll();

        return $this->render('bon_livraison/index.html.twig', [
            'bon_livraisons' => $bonLivraisons,
        ]);
    }

    /**
     * @Route("/new", name="bon_livraison_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $bonLivraison = new BonLivraison();
        $form = $this->createForm(BonLivraisonType::class, $bonLivraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($bonLivraison);
            $entityManager->flush();

            return $this->redirectToRoute('bon_livraison_index');
        }

        return $this->render('bon_livraison/new.html.twig', [
            'bon_livraison' => $bonLivraison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="bon_livraison_show", methods={"GET"})
     */
    public function show(BonLivraison $bonLivraison): Response
    {
        return $this->render('bon_livraison/show.html.twig', [
            'bon_livraison' => $bonLivraison,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="bon_livraison_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, BonLivraison $bonLivraison): Response
    {
        $form = $this->createForm(BonLivraisonType::class, $bonLivraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bon_livraison_index');
        }

        return $this->render('bon_livraison/edit.html.twig', [
            'bon_livraison' => $bonLivraison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="bon_livraison_delete", methods={"DELETE"})
     */
    public function delete(Request $request, BonLivraison $bonLivraison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bonLivraison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($bonLivraison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('bon_livraison_index');
    }
}

<?php

namespace App\Controller;

use App\Entity\Couleurs;
use App\Form\CouleursType;
use App\Repository\CouleursRepository;
use App\Repository\MenRepository;
use App\Repository\WomenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/couleurs")
 */
class CouleursController extends AbstractController
{
    /**
     * @Route("/", name="couleurs_index", methods={"GET"})
     */
    public function index(CouleursRepository $couleursRepository, WomenRepository $womenRepository, MenRepository $menRepository): Response
    {
        return $this->render('admin/couleurs/index.html.twig', [
            'couleurs' => $couleursRepository->findAll(),
            'womens' => $womenRepository->findAll(),
            'men' => $menRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="couleurs_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $couleur = new Couleurs();
        $form = $this->createForm(CouleursType::class, $couleur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($couleur);
            $entityManager->flush();

            return $this->redirectToRoute('couleurs_index');
        }

        return $this->render('admin/couleurs/new.html.twig', [
            'couleur' => $couleur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="couleurs_show", methods={"GET"})
     */
    public function show(Couleurs $couleur): Response
    {
        return $this->render('admin/couleurs/show.html.twig', [
            'couleur' => $couleur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="couleurs_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Couleurs $couleur): Response
    {
        $form = $this->createForm(CouleursType::class, $couleur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('couleurs_index');
        }

        return $this->render('admin/couleurs/edit.html.twig', [
            'couleur' => $couleur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="couleurs_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Couleurs $couleur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$couleur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($couleur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('couleurs_index');
    }
}

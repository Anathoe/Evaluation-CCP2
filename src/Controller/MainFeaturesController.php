<?php

namespace App\Controller;

use App\Entity\MainFeatures;
use App\Form\MainFeaturesType;
use App\Repository\MainFeaturesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/main/features")
 */
class MainFeaturesController extends AbstractController
{
    /**
     * @Route("/", name="main_features_index", methods={"GET"})
     */
    public function index(MainFeaturesRepository $mainFeaturesRepository): Response
    {
        return $this->render('admin/main_features/index.html.twig', [
            'main_features' => $mainFeaturesRepository->findAll(),
            
        ]);
    }

    /**
     * @Route("/new", name="main_features_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $mainFeature = new MainFeatures();
        $form = $this->createForm(MainFeaturesType::class, $mainFeature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mainFeature);
            $entityManager->flush();

            return $this->redirectToRoute('main_features_index');
        }

        return $this->render('admin/main_features/new.html.twig', [
            'main_feature' => $mainFeature,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="main_features_show", methods={"GET"})
     */
    public function show(MainFeatures $mainFeature): Response
    {
        return $this->render('admin/main_features/show.html.twig', [
            'main_feature' => $mainFeature,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="main_features_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MainFeatures $mainFeature): Response
    {
        $form = $this->createForm(MainFeaturesType::class, $mainFeature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('main_features_index');
        }

        return $this->render('admin/main_features/edit.html.twig', [
            'main_feature' => $mainFeature,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="main_features_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MainFeatures $mainFeature): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mainFeature->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mainFeature);
            $entityManager->flush();
        }

        return $this->redirectToRoute('main_features_index');
    }
}

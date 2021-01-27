<?php

namespace App\Controller;

use App\Entity\Women;
use App\Form\WomenType;
use App\Repository\WomenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/women")
 */
class WomenController extends AbstractController
{
    /**
     * @Route("/", name="women_index", methods={"GET"})
     */
    public function index(WomenRepository $womenRepository): Response
    {
        return $this->render('admin/women/index.html.twig', [
            'womens' => $womenRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="women_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $woman = new Women();
        $form = $this->createForm(WomenType::class, $woman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($woman);
            $entityManager->flush();

            return $this->redirectToRoute('women_index');
        }

        return $this->render('admin/women/new.html.twig', [
            'woman' => $woman,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="women_show", methods={"GET"})
     */
    public function show(Women $woman): Response
    {
        return $this->render('admin/women/show.html.twig', [
            'woman' => $woman,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="women_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Women $woman): Response
    {
        $form = $this->createForm(WomenType::class, $woman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('women_index');
        }

        return $this->render('admin/women/edit.html.twig', [
            'woman' => $woman,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="women_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Women $woman): Response
    {
        if ($this->isCsrfTokenValid('delete'.$woman->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($woman);
            $entityManager->flush();
        }

        return $this->redirectToRoute('women_index');
    }
}

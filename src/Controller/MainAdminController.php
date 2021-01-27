<?php

namespace App\Controller;

use App\Entity\MainAdmin;
use App\Form\MainAdminType;
use App\Repository\MainAdminRepository;
use App\Repository\MenRepository;
use App\Repository\WomenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/main/admin")
 */
class MainAdminController extends AbstractController
{
    /**
     * @Route("/", name="main_admin_index", methods={"GET"})
     */
    public function index(MainAdminRepository $mainAdminRepository, WomenRepository $womenRepository, MenRepository $menRepository): Response
    {
        return $this->render('admin/main_admin/index.html.twig', [
            'main_admins' => $mainAdminRepository->findAll(),
            'womens' => $womenRepository->findAll(),
            'men' => $menRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="main_admin_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $mainAdmin = new MainAdmin();
        $form = $this->createForm(MainAdminType::class, $mainAdmin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mainAdmin);
            $entityManager->flush();

            return $this->redirectToRoute('main_admin_index');
        }

        return $this->render('admin/main_admin/new.html.twig', [
            'main_admin' => $mainAdmin,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="main_admin_show", methods={"GET"})
     */
    public function show(MainAdmin $mainAdmin): Response
    {
        return $this->render('admin/main_admin/show.html.twig', [
            'main_admin' => $mainAdmin,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="main_admin_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MainAdmin $mainAdmin): Response
    {
        $form = $this->createForm(MainAdminType::class, $mainAdmin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('main_admin_index');
        }

        return $this->render('admin/main_admin/edit.html.twig', [
            'main_admin' => $mainAdmin,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="main_admin_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MainAdmin $mainAdmin): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mainAdmin->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mainAdmin);
            $entityManager->flush();
        }

        return $this->redirectToRoute('main_admin_index');
    }
}

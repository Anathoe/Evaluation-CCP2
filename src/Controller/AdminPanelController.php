<?php

namespace App\Controller;

use App\Repository\MenRepository;
use App\Repository\WomenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPanelController extends AbstractController
{
    /**
     * @Route("admin/admin/panel", name="admin_panel")
     */
    public function index(WomenRepository $womenRepository, MenRepository $menRepository): Response
    {
        return $this->render('admin/admin_panel/index.html.twig', [
            'controller_name' => 'AdminPanelController',
            'womens' => $womenRepository->findAll(),
            'men' => $menRepository->findAll(),
        ]);
    }
}

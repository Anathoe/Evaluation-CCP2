<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\WomenRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WomenFrontController extends AbstractController
{
    /**
     * @Route("/women/front", name="women_front")
     */
    public function index( ArticleRepository $articleRepository, WomenRepository $womenRepository): Response
    {
        return $this->render('women_front/index.html.twig', [
            'controller_name' => 'WomenFrontController',
            'articles'=>$articleRepository->findAll(),
            'womens'=>$womenRepository->findAll(),
        ]);
    }
}

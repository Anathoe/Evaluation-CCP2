<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\MenRepository;
use App\Repository\WomenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenFrontController extends AbstractController
{
    /**
     * @Route("/men/front", name="men_front")
     */
    public function index(ArticleRepository $articleRepository, MenRepository $menRepository, WomenRepository $womenRepository): Response
    {
        return $this->render('men_front/index.html.twig', [
            'controller_name' => 'MenFrontController',
            'articles'=>$articleRepository->findAll(),
            'men'=>$menRepository->findAll(),
            'womens'=>$womenRepository->findAll(),
        ]);
    }
}

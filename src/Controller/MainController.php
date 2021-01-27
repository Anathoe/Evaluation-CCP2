<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\BlogRepository;
use App\Repository\CategoriesRepository;
use App\Repository\MainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(ArticleRepository $articleRepository, BlogRepository $blogRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'articles'=>$articleRepository->findAll(),
            'blogs'=>$blogRepository->findAll(),
        ]);
    }

}

<?php

namespace App\Controller;

use App\Entity\Men;
use App\Repository\ArticleRepository;
use App\Repository\BlogRepository;
use App\Repository\CategoriesRepository;
use App\Repository\MainAdminRepository;
use App\Repository\MainFeaturesRepository;
use App\Repository\MainRepository;
use App\Repository\MenRepository;
use App\Repository\WomenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(ArticleRepository $articleRepository, BlogRepository $blogRepository, MainAdminRepository $mainAdminRepository, WomenRepository $womenRepository, MenRepository $menRepository, MainFeaturesRepository $mainFeaturesRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'articles'=>$articleRepository->findAll(),
            'blogs'=>$blogRepository->findAll(),
            'mainadmins'=>$mainAdminRepository->findAll(),
            'womens'=>$womenRepository->findAll(),
            'men'=>$menRepository->findAll(),
            'mainfeatures'=>$mainFeaturesRepository->findAll(),
        ]);
    }

}

<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepo,CategoryRepository $categoryRepository, Request $request): Response
    {

      $articles = $articleRepo->findAll();
      $articles =$articleRepo->findArticleOrderByDesc($articles);
      // foreach ($articlesAll as $article) {
      //   $artID = $article->getId();
      //   array_push($articles, $article->findArticleOrderByDesc());
        
      // }

        return $this->render('home/index.html.twig', [
          'articles' => $articles,
          'categories' => $categoryRepository->findAll()
        ]);
    }
}

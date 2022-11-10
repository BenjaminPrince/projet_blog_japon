<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepo,CategoryRepository $categoryRepository): Response
    {

      // $input = $request->query->get('search');
      // $articles = $articleRepo->findBy(array(),array('created_at'=>'DESC'));

        return $this->render('home/index.html.twig', [
          'articles' => $articleRepo->findAll(),
          'categories' => $categoryRepository->findAll()
        ]);
    }
}

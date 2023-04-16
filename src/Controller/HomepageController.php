<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('homepage/index.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }
}

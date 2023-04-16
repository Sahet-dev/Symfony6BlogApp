<?php

namespace App\Controller;

use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DislikeController extends AbstractController
{
//    #[Route('/comment/{id}/dislike', name: 'app_dislike_comment')]
//    public function dislikeComment(Request $request, EntityManagerInterface $entityManager, Comment $comment): Response
//    {
//
//
//            $comment->setDislikes($comment->getDislikes() + 1);
//
//        return $this->redirectToRoute('app_like_comment',[
//            'id' => $comment->getId(),
//        ]);
//
//    }
}

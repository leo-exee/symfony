<?php
namespace App\Controller;

use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class HomeController
 * @package App\Controller
 * Gestion des commentaires indépendante
 */
class CommentController extends AbstractController {

    /**
     * @param Comment|null $comment
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * Gestion de la suppression des commentaires
     */

    public function removeComment(?Comment $comment, Request $request, EntityManagerInterface $entityManager){

        $submittedToken = $request->request->get('token');
        $id = $_POST['id'];


        if ($this->isCsrfTokenValid('token'.$comment->getId(), $submittedToken)) {
            $entityManager->remove($comment);
            $entityManager->flush();
        }
        return $this->redirect("http://localhost:8000/article/$id");
    }
}
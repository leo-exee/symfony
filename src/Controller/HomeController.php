<?php
namespace App\Controller;

use App\Entity\Blog;
use App\Entity\Comment;
use App\Form\BlogType;
use App\Form\CommentType;
use App\Form\EditBlogType;
use App\Repository\BlogRepository;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;


/**
 * Class HomeController
 * @package App\Controller
 * Gestion de la page d'accueil
 */
class HomeController extends AbstractController {

    /**
     * @param BlogRepository $blogRepository
     * @return \Symfony\Component\HttpFoundation\Response
     * Affichage de la page d'accueil
     */

	public function index(BlogRepository $blogRepository) {
	    $blog = $blogRepository->findAll();
		return $this->render('index.html.twig', ['blogs' => $blog]);
	}
}
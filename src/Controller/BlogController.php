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
 * Gestion du blog et des articles
 */
class BlogController extends AbstractController {

    /**
     * @param BlogType $blogType
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param SluggerInterface $slugger
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * Gestion de l'ajout de nouveaux articles
     */

    public function addBlog(BlogType $blogType, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger)
    {
        $blog = new Blog();
        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($blog);
            $entityManager->flush();

            $picture = $form->get('img')->getData();
            if ($picture) {
                $newName = $blog->getId();
                $picture->move(
                    $this->getParameter('kernel.project_dir').'/public/picture_uploaded', $newName.'.jpg'
                );
                $blog->setImg($newName.'.jpg');

            }
            $entityManager->persist($blog);
            $entityManager->flush();
            return $this->redirectToRoute('index');
        }
        return $this->render('addBlog.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @param Blog|null $blog
     * @param EditBlogType $blogType
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param SluggerInterface $slugger
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * Gestion de la modification des articles existants
     */

    public function editBlog(?Blog $blog, EditBlogType $blogType, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger)
    {
        $id = $request->request->get('id');
        $form = $this->createForm(EditBlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('index');
        }

        return $this->render('editBlog.html.twig', ['form' => $form->createView(), 'blog' => $blog]);
    }

    /**
     * @param Blog|null $blog
     * @param BlogRepository $blogRepository
     * @param CommentRepository $commentRepository
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\Response
     * Affichage de l'article sélectionné + des commentaires lié à l'article + ajout de nouveaux commentaires à l'article
     */

    public function article(?Blog $blog, BlogRepository $blogRepository, CommentRepository $commentRepository, Request $request, EntityManagerInterface $entityManager){

        $blog = $blogRepository->find($blog);
        $id = $blog->getId();

        $comments = $commentRepository->findBy(array('blog' => $blog));

        $theDate = $blog->getDate();
        $stringDate = $theDate->format('d/m/y');

        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        $blog = $blogRepository->find($id);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setBlog($blog);
            $entityManager->persist($comment);
            $entityManager->flush();
            header("Refresh:0");
        }

        return $this->render('article.html.twig', ['blog' => $blog, 'date' => $stringDate, 'comments' => $comments, 'form' => $form->createView(), 'id' => $id]);
    }

    /**
     * @param Blog|null $blog
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * Gestion de la supprésion de l'article sélectionné
     */

    public function removeBlog(?Blog $blog, Request $request, EntityManagerInterface $entityManager){

        $submittedToken = $request->request->get('token');

        if ($this->isCsrfTokenValid('token'.$blog->getId(), $submittedToken)) {
            $entityManager->remove($blog);
            $entityManager->flush();
        }
        return $this->redirectToRoute('index');
    }
}
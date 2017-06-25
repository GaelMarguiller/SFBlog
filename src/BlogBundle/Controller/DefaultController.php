<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('BlogBundle:Article');
        $articles = $repository->findAll();
        return $this->render('BlogBundle:Default:index.html.twig',
            ['articles' => $articles]);
    }

    /**
     * @Route("/category", name="category")
     */
    public function categoryAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig');
    }
}

<?php

// src/symfony/CinemaBundle/Controller/DefaultController2.php
namespace symfony\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController2 extends Controller
{
    /**
    * @Route("/", name="page_auteur")
    */
    public function indexAction()
    {
        return $this->render('symfonyCinemaBundle:Default:index.html.twig');
    }

    /**
    * @Route("/auteurs", name="page_auteur")
    */
    public function listAction()
    {

    $auteurs = $this->getDoctrine()->getRepository('symfonyCinemaBundle:auteur')->findAll();

    $titre_de_la_page = 'auteurs';
        
         return $this->render(
        'symfonyCinemaBundle:auteur:list.html.twig',
        ['auteurs' => $auteurs, 'titre' => $titre_de_la_page]
    );
    }

    /**
    * @Route("/auteur/{id}", requirements={"id": "\d+"}, name="page_auteur")
    */
    public function showAction($id)
    {
        $auteur = $this->getDoctrine()->getRepository('symfonyCinemaBundle:auteur')->find($id);

    return $this->render(
        'symfonyCinemaBundle:auteur:show.html.twig',
        ['auteur' => $auteur]
    );

    }
}

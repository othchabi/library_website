<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * Fonction index qui dirige l'utilisateur vers la page d'accueil
     * @return Response
     */
    public function index(): Response
    {
        /**
         * on retourne la vue de la page d'accueil
         */
        return $this->render('index.html.twig');
    }
}
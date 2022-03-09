<?php

namespace App\Controller;

use App\Entity\Auteur;
use App\Entity\Livre;
use App\Entity\Genre;
use App\Form\AuteurType;
use App\Form\NoteType;
use App\Repository\AuteurRepository;
use App\Repository\GenreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bookland/auteur")
 */
class AuteurController extends AbstractController
{



      /**
     * action 26 : modifier un auteur
     * @Route("/{id}/ajouternote", name="auteur_note")
     */
    public function ajouternote(Request $request, Auteur $auteur, EntityManagerInterface $entityManager)
   {

     $form = $this->createForm(NoteType::class);
     $form->handleRequest($request);
     $id=$auteur->getId();

     if($form->isSubmitted() && $form->isValid()){
           $data = $form->getData();
           $note = $data['Note'];
           
           $repo = $this->getDoctrine()->getManager()->getRepository(Auteur::class);
           $repo2 = $this->getDoctrine()->getManager()->getRepository(Livre::class);
           $livres = $repo->livreauteur($id);
             
               foreach( $livres as $livre) {
                
                $repo2->ajouternotelivre($livre,$note);

               }
          
           
           return $this->redirectToRoute('auteur_note',['id'=>$id]);

         }
          return $this->render("auteur/ajouternote.html.twig",['auteur'=>$auteur,
         "form" => $form->createView()]);
     
 } 


    /**
     * action16 :
     * lister les auteurs ayant écrits dans au moins 3 livres différents
     * @Route("/auteurPlusTrois", name="auteur_plus_trois_livres")
     */
    public function auteurPlusTroisLivres()
    {
        $repo = $this->getDoctrine()->getManager()->getRepository(Auteur::class);
        $auteurs = $repo->auteurTroisLivres();
        $this->addFlash('success', "Liste des auteurs ayant écrit au moins trois livres :");
        return $this->render("/auteur/index.html.twig", [
            'auteurs' => $auteurs
        ]);
    }

    /**
     * action20 : Afficher pour chaque auteur la liste des genres dans l’ordre chronologique pour lesquels il a
     * écrit au moins livre : un auteur n’ayant écrit aucun livre ne devra pas apparaître dans cette liste.
     * @Route("/auteurGenreChrono/{id}", name="auteur_genres_chrono")
     */
    public function auteurGenresChrono(Auteur $auteur, GenreRepository $genreRepository)
    {
        $repo = $this->getDoctrine()->getManager()->getRepository(Auteur::class);
        $genres = $genreRepository->genresOrdreChrono($auteur->getId());
        return $this->render("/auteur/showGenresChrono.html.twig", [
            'genres' => $genres,
            'auteur' => $auteur
        ]);
    }

    /**
     * dirige vers la page auteurs où on affiche la liste de tous les auteurs
     * @Route("/", name="auteur_index", methods={"GET"})
     */
    public function index(AuteurRepository $auteurRepository): Response
    {
        return $this->render('auteur/index.html.twig', [
            'auteurs' => $auteurRepository->findAll(),
        ]);
    }

    /**
     * action5 : ajouter un auteur
     * @Route("/new", name="auteur_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $auteur = new Auteur();
        $form = $this->createForm(AuteurType::class, $auteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($auteur);
            $entityManager->flush();
            $this->addFlash('success', 'Auteur a été crée avec succès!');

            return $this->redirectToRoute('auteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('auteur/new.html.twig', [
            'auteur' => $auteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * action4 : Afficher les détails d’un auteur donné (i.e., nom, prenom, date de naissance, nationalité et les
     * livres qu’il a écrits).
     * @Route("/{id}", name="auteur_show", methods={"GET"})
     */
    public function show(Auteur $auteur): Response


    
    {   $repo = $this->getDoctrine()->getManager()->getRepository(Auteur::class);
        $genres = $repo->genresdeauteur($auteur->getId());

        

        return $this->render('auteur/show.html.twig', [
            'auteur' => $auteur,'genres'=>$genres
        ]);
    }

    /**
     * action6 : modifier un auteur
     * @Route("/{id}/edit", name="auteur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Auteur $auteur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AuteurType::class, $auteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Auteur a été modifié!');
            return $this->redirectToRoute('auteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('auteur/edit.html.twig', [
            'auteur' => $auteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * action7 : supprimer un auteur
     * @Route("/{id}", name="auteur_delete", methods={"POST"})
     */
    public function delete(Request $request, Auteur $auteur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $auteur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($auteur);
            $entityManager->flush();
            $this->addFlash('success', 'Auteur a été supprimer!');
        }
       
        return $this->redirectToRoute('auteur_index', [], Response::HTTP_SEE_OTHER);
    }

}
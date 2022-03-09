<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Entity\Livre;
use App\Entity\Auteur;
use App\Form\GenreType;
use App\Repository\GenreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\NombrePagesGenre;
/**
 * @Route("/bookland/genre")
 */
class GenreController extends AbstractController
{   /**
     * action 24
     * @Route("/SupprimerGenreSansLivres", name="delete_genre")
     */
    public function DeleteGenre(){
        $em= $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getManager()->getRepository(Genre::class);
        $genres= $repo->findall();
   
       
        foreach($genres as $genre) {
           if ( $genre->getLivres()->isEmpty()){
               $em->remove($genre);
               $this->addFlash('success', 'Le genre '.$genre->getNom() .' a été supprimé !');
             }
           }
           $em->flush();
       return $this->redirectToRoute('genre_index',[], Response::HTTP_SEE_OTHER);
     }
    /**
     * action 22
     * @Route("/moyennepage/{id}", name="Calculer_moyenne_pages")
     */
    public function MoyennePagesTotales(Request $request,Genre $genre){
       
        
        $moyenne = null;
        $repo = $this->getDoctrine()->getManager()->getRepository(Genre::class);
        $res = $repo->PagesMoyenne($genre);
        $moyenne = $res['0']['m'];
        

        return $this->render('genre/ResultatMoyennePage.html.twig',array(
            'moyenne' => $moyenne,'nom'=> $genre->getNom()));
}
    /**
     * action 19
     * @Route("/nombrepage/{id}", name="Calculer_nombre_pages")
     */
    public function NombrePagesTotales(Request $request,Genre $genre){

        
        $repo = $this->getDoctrine()->getManager()->getRepository(Genre::class);
        $res = $repo->PagesTotales($genre);
        $nombre = $res['0']['nb'];
               
              

        
         return $this->render("genre/ResultatNombrePage.html.twig",array(
                'nombre' => $nombre,'nom'=> $genre->getNom()));
        
}
    
    /**
     * @Route("/", name="genre_index", methods={"GET"})
     */
    public function index(GenreRepository $genreRepository): Response
    {
        return $this->render('genre/index.html.twig', [
            'genres' => $genreRepository->findAll(),
        ]);
    }

  


    /**
     * @Route("/new", name="genre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $genre = new Genre();
        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($genre);
            $entityManager->flush();
            $this->addFlash('success', 'Genre a été crée avec succès!');

            return $this->redirectToRoute('genre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('genre/new.html.twig', [
            'genre' => $genre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="genre_show", methods={"GET"})
     */
    public function show(Genre $genre): Response
    {   
        $repo = $this->getDoctrine()->getManager()->getRepository(Genre::class);
        $auteurs = $repo->auteursdugenre($genre->getId());

        return $this->render('genre/show.html.twig', [
            'genre' => $genre,'auteurs'=>$auteurs
        ]);
    }

    /**
     * @Route("/{id}/edit", name="genre_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Genre $genre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Genre a été modifié !');

            return $this->redirectToRoute('genre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('genre/edit.html.twig', [
            'genre' => $genre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="genre_delete", methods={"POST"})
     */
    public function delete(Request $request, Genre $genre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$genre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($genre);
            $entityManager->flush();
            $this->addFlash('success', 'Genre a été supprimé !');
        }

        return $this->redirectToRoute('genre_index', [], Response::HTTP_SEE_OTHER);
    }
    
   
}

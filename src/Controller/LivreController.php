<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivreType;
use App\Form\FiltreLivre\FiltreLivreDate;
use App\Form\FiltreLivre\FiltreTitreLivre;
use App\Form\FiltreLivre\FiltreLivreDateNote;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bookland/livre")
 */
class LivreController extends AbstractController


{


            /**
    * action 23
     * @Route("/{id}/augmenternote", name="augmenter_note")
     */
    public function augmenternote(Livre $livre){
        $repo  = $this->getDoctrine()->getRepository(Livre::class);
        $id=$livre->getId();
        $note=$livre->getNote();
        if ($note<20){      
        $repo->augmenternotelivre($livre);}
        return $this->redirectToRoute('livre_show',array('id'=>$id), Response::HTTP_SEE_OTHER);
        
}

    /**
    * action 23
     * @Route("/{id}/diminuernote", name="diminuer_note")
     */
    public function diminuernote(Livre $livre){
        $repo  = $this->getDoctrine()->getRepository(Livre::class);
        $id=$livre->getId();
        $note=$livre->getNote();
        if ($note>0){
        $repo->diminuernotelivre($livre);}
        
        return $this->redirectToRoute('livre_show',array('id'=>$id), Response::HTTP_SEE_OTHER);
   
        
         }











       /**
    * action 15
     * @Route("/filtrerlivredatenote", name="filtre_livre_dates_notes")
     */
    public function listerEntreDeuxDateEtDeuxNote(Request $request){
        $form = $this->createForm(FiltreLivreDateNote::class);
        $form->handleRequest($request);
        $livre = null;

        if($form->isSubmitted() && $form->isValid()){
               $data = $form->getData();
               $date1 = $data['Date1'];
               $date2  = $data['Date2'];
               $note1 = $data['Note1'];
               $note2  = $data['Note2'];

               $repo = $this->getDoctrine()->getManager()->getRepository(Livre::class);
             
               $livre = $repo->rechercherLivreCreeEntreDeuxDatesETDeuxNotes($date1,$date2,$note1,$note2);
               
               return $this->render("livre/index.html.twig",[
                'livres' => $livre,
            ]);

        }
        
        return $this->render("livre/filtrerlivredatenote.html.twig",array(
            'form' => $form->createView()));
        
}


     /**
     *  action 17
     * @Route("/filtrerparitesexe", name="filtre_livre_parite")
     */
    public function livreparitehommefemme(){
        $repo = $this->getDoctrine()->getManager()->getRepository(Livre::class);
        $livres = $repo->rechercherlivreparitesexe();
        $this->addFlash('success',"Liste des livres avec parité homme/femme :");
        return $this->render("/livre/index.html.twig",[
            'livres' => $livres
        ]);
}

     /**
     *  action 14
     * @Route("/filtrerlivreauteur", name="filtre_livre_auteur")
     */
    public function listerLivreAuteurNationaliteDiff(){
        $repo = $this->getDoctrine()->getManager()->getRepository(Livre::class);
        $livres = $repo->rechercherLivreAuteurNationaliteDiff();
        $this->addFlash('success',"Liste des livres avec auteurs de nationalité différentes :");
        return $this->render("/livre/index.html.twig",[
            'livres' => $livres
        ]);
}





    
   /**
    * action 13
     * @Route("/filtrerlivredate", name="filtre_livre_dates")
     */
    public function listerEntreDeuxDate(Request $request){
        $form = $this->createForm(FiltreLivreDate::class);
        $form->handleRequest($request);
        $livre = null;

        if($form->isSubmitted() && $form->isValid()){
               $data = $form->getData();
               $date1 = $data['Date1'];
               $date2  = $data['Date2'];

               $repo = $this->getDoctrine()->getManager()->getRepository(Livre::class);
             
               $livre = $repo->rechercherLivreCreeEntreDeuxDates($date1,$date2);
               return $this->render("livre/index.html.twig",[
                'livres' => $livre,
            ]);

        }

        return $this->render("livre/filtrerlivredate.html.twig",array(
            'form' => $form->createView()));
        
}


   /**
    * action 25
     * @Route("/recherchelivre", name="livre_recherche")
     */
    public function indextitre(Request $request)
    {
        
        $form = $this->createForm(FiltreTitreLivre::class);
        $form->handleRequest($request);
        $livre = null;

        if($form->isSubmitted() && $form->isValid()){
               $data = $form->getData();
               $titre = $data['titre'];
               $repo = $this->getDoctrine()->getManager()->getRepository(Livre::class);
             
               $livre = $repo->recherchertitrelivre($titre);
               return $this->render("livre/index.html.twig",[
                'livres' => $livre,
            ]);}

        
        return $this->render('livre/recherchelivre.html.twig',array(
            'form' => $form->createView()));
       
    }





    /**
     * @Route("/", name="livre_index", methods={"GET"})
     */
    public function index(LivreRepository $livreRepository): Response
    {
        
        
        return $this->render('livre/index.html.twig', [
            'livres' => $livreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="livre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $livre = new Livre();
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($livre);
            $entityManager->flush();
            $this->addFlash('success', 'Livre crée avec succès!');

            return $this->redirectToRoute('livre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('livre/new.html.twig', [
            'livre' => $livre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="livre_show", methods={"GET"})
     */
    public function show(Livre $livre): Response
    {  
        return $this->render('livre/show.html.twig', [
            'livre' => $livre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="livre_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Livre $livre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Livre a été modifié !');

            return $this->redirectToRoute('livre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('livre/edit.html.twig', [
            'livre' => $livre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="livre_delete", methods={"POST"})
     */
    public function delete(Request $request, Livre $livre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($livre);
            $entityManager->flush();
            $this->addFlash('success', 'Livre a été supprimé !');
        }

        return $this->redirectToRoute('livre_index', [], Response::HTTP_SEE_OTHER);
    }





}

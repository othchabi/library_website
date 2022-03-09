<?php

namespace App\Controller;

use App\Entity\Auteur;
use App\Entity\Genre;
use App\Entity\Livre;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class InitController extends AbstractController
{
    /**
     * 4) fonction init accessible via l’url bookland/init
     * Cette fonction permet d’installer tout le jeu de données nécessaire dans la base de données pour tester toutes
     * les actions du projet une fois effectuée la migration.
     * @param ManagerRegistry $doctrine
     * @return Response
     */
    public function init(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        /**
         * Création des genres
         */
        $genre1 = new Genre();
        $genre1->setNom('Science fiction');

        $genre2 = new Genre();
        $genre2->setNom('Policier');

        $genre3 = new Genre();
        $genre3->setNom('Philosophie');

        $genre4 = new Genre();
        $genre4->setNom('Economie');

        $genre5 = new Genre();
        $genre5->setNom('Psychologie');

        // tell Doctrine you want to (eventually) save the Genre (no queries yet)
        $entityManager->persist($genre1);
        $entityManager->persist($genre2);
        $entityManager->persist($genre3);
        $entityManager->persist($genre4);
        $entityManager->persist($genre5);

        /**
         * Création des auteurs
         */
        $auteur1 = new Auteur();
        $auteur1->setNomPrenom('Richard Thaler');
        $auteur1->setSexe('M');
        $auteur1->setDateDeNaissance(new \DateTime('1945-12-12'));
        $auteur1->setNationalite('USA');

        $auteur2 = new Auteur();
        $auteur2->setNomPrenom('Cass Sunstein');
        $auteur2->setSexe('M');
        $auteur2->setDateDeNaissance(new \DateTime('1943-11-23'));
        $auteur2->setNationalite('Allemagne');

        $auteur3 = new Auteur();
        $auteur3->setNomPrenom('Francis Gabrelot');
        $auteur3->setSexe('M');
        $auteur3->setDateDeNaissance(new \DateTime('1967-01-29'));
        $auteur3->setNationalite('France');

        $auteur4 = new Auteur();
        $auteur4->setNomPrenom('Ayn Rand');
        $auteur4->setSexe('F');
        $auteur4->setDateDeNaissance(new \DateTime('1950-06-21'));
        $auteur4->setNationalite('Russie');

        $auteur5 = new Auteur();
        $auteur5->setNomPrenom('Duschmol');
        $auteur5->setSexe('M');
        $auteur5->setDateDeNaissance(new \DateTime('2001-12-23'));
        $auteur5->setNationalite('Groland');

        $auteur6 = new Auteur();
        $auteur6->setNomPrenom('Nancy Grave');
        $auteur6->setSexe('F');
        $auteur6->setDateDeNaissance(new \DateTime('1952-10-24'));
        $auteur6->setNationalite('USA');

        $auteur7 = new Auteur();
        $auteur7->setNomPrenom('James Enckling');
        $auteur7->setSexe('M');
        $auteur7->setDateDeNaissance(new \DateTime('1970-07-03'));
        $auteur7->setNationalite('USA');

        $auteur8 = new Auteur();
        $auteur8->setNomPrenom('Jean Dupont');
        $auteur8->setSexe('M');
        $auteur8->setDateDeNaissance(new \DateTime('1970-07-03'));
        $auteur8->setNationalite('France');

        // tell Doctrine you want to (eventually) save the Auteur (no queries yet)
        $entityManager->persist($auteur1);
        $entityManager->persist($auteur2);
        $entityManager->persist($auteur3);
        $entityManager->persist($auteur4);
        $entityManager->persist($auteur5);
        $entityManager->persist($auteur6);
        $entityManager->persist($auteur7);
        $entityManager->persist($auteur8);

        /**
         * Création des livres
         */
        $livre1 = new Livre();
        $livre1->setIsbn('978-2-07-036822-8');
        $livre1->setTitre('Symfonystique');
        $livre1->setNbpages(117);
        $livre1->setDateDeParution(new \DateTime('2008-01-20'));
        $livre1->setNote(8);
        // genres du livre
        $livre1->addGenre($genre2);
        $livre1->addGenre($genre3);
        // auteurs du livre
        $livre1->addAuteur($auteur3);
        $livre1->addAuteur($auteur4);
        $livre1->addAuteur($auteur6);

        $livre2 = new Livre();
        $livre2->setIsbn('978-2-251-44417-8');
        $livre2->setTitre('La grève');
        $livre2->setNbpages(1245);
        $livre2->setDateDeParution(new \DateTime('1961-06-12'));
        $livre2->setNote(19);
        // genres du livre
        $livre2->addGenre($genre3);
        // auteurs du livre
        $livre2->addAuteur($auteur4);
        $livre2->addAuteur($auteur7);

        $livre3 = new Livre();
        $livre3->setIsbn('978-2-212-55652-0');
        $livre3->setTitre('Symfonyland');
        $livre3->setNbpages(131);
        $livre3->setDateDeParution(new \DateTime('1980-07-17'));
        $livre3->setNote(15);
        // genres du livre
        $livre3->addGenre($genre1);
        // auteurs du livre
        $livre3->addAuteur($auteur8);
        $livre3->addAuteur($auteur7);
        $livre3->addAuteur($auteur4);

        $livre4 = new Livre();
        $livre4->setIsbn('978-2-0807-1057-4');
        $livre4->setTitre('Négociation Complexe');
        $livre4->setNbpages(234);
        $livre4->setDateDeParution(new \DateTime('1992-09-25'));
        $livre4->setNote(16);
        // genres du livre
        $livre4->addGenre($genre5);
        // auteurs du livre
        $livre4->addAuteur($auteur1);
        $livre4->addAuteur($auteur2);

        $livre5 = new Livre();
        $livre5->setIsbn('978-0-300-12223-7');
        $livre5->setTitre('Ma vie');
        $livre5->setNbpages(5);
        $livre5->setDateDeParution(new \DateTime('2021-11-08'));
        $livre5->setNote(03);
        // genres du livre
        $livre5->addGenre($genre2);
        // auteurs du livre
        $livre5->addAuteur($auteur8);

        $livre6 = new Livre();
        $livre6->setIsbn('978-0-141-18776-1');
        $livre6->setTitre('Ma vie : suite');
        $livre6->setNbpages(5);
        $livre6->setDateDeParution(new \DateTime('2021-11-09'));
        $livre6->setNote(01);
        // genres du livre
        $livre6->addGenre($genre2);
        // auteurs du livre
        $livre6->addAuteur($auteur8);

        $livre7 = new Livre();
        $livre7->setIsbn('978-0-141-18786-0');
        $livre7->setTitre('Le monde comme volonté et comme représentation');
        $livre7->setNbpages(1987);
        $livre7->setDateDeParution(new \DateTime('1821-11-09'));
        $livre7->setNote(19);
        // genres du livre
        $livre7->addGenre($genre3);
        // auteurs du livre
        $livre7->addAuteur($auteur6);
        $livre7->addAuteur($auteur3);

        // tell Doctrine you want to (eventually) save the Livre (no queries yet)
        $entityManager->persist($livre1);
        $entityManager->persist($livre2);
        $entityManager->persist($livre3);
        $entityManager->persist($livre4);
        $entityManager->persist($livre5);
        $entityManager->persist($livre6);
        $entityManager->persist($livre7);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return $this->render('index.html.twig');
    }
}
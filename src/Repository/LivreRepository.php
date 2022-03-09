<?php

namespace App\Repository;

use App\Entity\Livre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Livre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livre[]    findAll()
 * @method Livre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livre::class);
    }
    
    
    public function rechercherLivreCreeEntreDeuxDates($d1,$d2)
    {
        return $this->createQueryBuilder('m')
                    ->where("m.dateDeParution > ?1")
                    ->andWhere("m.dateDeParution < ?2")
                    ->setParameter(1, $d1)
                    ->setParameter(2, $d2)
                    ->getQuery()
                    ->getResult();
    }






 public function rechercherlivreparitesexe()
    {
        return $this->createQueryBuilder('l')
            ->innerJoin('l.auteurs', 'a')
            ->leftJoin('App\Entity\Auteur', 'men', 'WITH', 'a.id = men.id AND men.sexe = :m')
            ->setParameter('m', 'M')
            ->leftJoin('App\Entity\Auteur', 'women', 'WITH', 'a.id = women.id AND women.sexe = :f')
            ->setParameter('f', 'F')
            ->groupBy('l.id')
            ->having('count(men.id) = count(women.id)')
            ->getQuery()
            ->getResult();
    }



public function rechercherLivreAuteurNationaliteDiff(){

    return $this->createQueryBuilder('l')
    ->innerJoin('l.auteurs', 'a')
    ->leftJoin('App\Entity\Auteur', 'auteur', 'WITH', 'a.id = auteur.id ')
    ->groupBy('l.id')
    ->having('count(distinct(auteur.nationalite)) = count(auteur.id)')
    ->getQuery()
    ->getResult();
}
    public function rechercherLivreCreeEntreDeuxDatesETDeuxNotes($d1,$d2,$n1,$n2)
    {
        return $this->createQueryBuilder('m')
                    ->where("m.dateDeParution > ?1")
                    ->andWhere("m.dateDeParution < ?2")
                    ->andWhere("m.note > ?3")
                    ->andWhere("m.note < ?4")
                    ->setParameter(1, $d1)
                    ->setParameter(2, $d2)
                    ->setParameter(3, $n1)
                    ->setParameter(4, $n2)
                    ->getQuery()
                    ->getResult();
    }

    public function augmenternotelivre($livre){
        return $this->createQueryBuilder('l')
                    
                    ->set('l.note','l.note + 1')
                    ->where('l.id = :id')
                   
                    ->setParameter('id' ,$livre)
                    
                    ->update()
                    ->getQuery()
                    ->execute();
    } 




    
    public function diminuernotelivre($livre){
        return $this->createQueryBuilder('l')
                    
                    ->set('l.note','l.note - 1')
                    ->where('l.id = :id')
                    ->setParameter('id',$livre)
                    ->update()
                    ->getQuery()
                    ->execute();
    } 

        public function ajouternotelivre($livre,$note){
        return $this->createQueryBuilder('l')
                    
                    ->set('l.note','l.note + ?1')
                    ->where('l.id = :id')
                    ->andWhere('l.note + ?1 < 21 ')
                    ->setParameter('id',$livre)
                    ->setParameter(1,$note)
                    ->update()
                    ->getQuery()
                    ->execute();
    } 
    public function recherchertitrelivre($titre){

        return $this->createQueryBuilder('f')
                    ->where('f.titre LIKE :titre')
                    ->setParameter('titre',"%".$titre."%")
                    ->getQuery()
                    ->getResult();
    }

 
/*
    public function rechercherLivreAuteurNationaliteDiff(){


            $qb = $this->createQueryBuilder('l')
                    ->select('l')
                    ->innerJoin('App\Entity\Auteur','a',JOIN::WITH,'a=l.auteurs')
                    ->where(
                        $qb->expr()-> (  ($qb->expr()->COUNT('l.auteurs')) = ($qb->expr()->COUNT(DISTINCT('a.nationalite'))) ))
                    ->getQuery();
                return  $qb->getResult();
        }

*/
    // /**
    //  * @return Livre[] Returns an array of Livre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Livre
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

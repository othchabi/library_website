<?php

namespace App\Repository;

use App\Entity\Auteur;
use App\Entity\Livre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr\Math;
/**
 * @method Auteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Auteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Auteur[]    findAll()
 * @method Auteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Auteur::class);
    }


    public function auteurTroisLivres(){
        $qb = $this->createQueryBuilder('a');
        $qb = $qb ->innerJoin('a.livres','l')
                  ->having('count(l) > 2')
                  ->groupBy('a');
            return $qb->getQuery()->getResult();
    }
  public function livreauteur($auteur){
    $qb = $this->createQueryBuilder('a');
    $qb = $qb ->select('l.id')
              ->innerJoin('a.livres','l')
              ->where('a.id = ?1')
              ->setParameter(1,$auteur);
        return $qb->getQuery()->getResult();

  }

  public function genresdeauteur($auteur){


    return $this->createQueryBuilder('a')
    ->select('g.nom')
    ->innerJoin('a.livres', 'l')
    ->where('a.id = :id')
    ->setParameter('id',$auteur)
    ->leftJoin('App\Entity\Livre', 'livre', 'WITH', 'livre.id = l.id')
    ->innerJoin('livre.genres', 'g')
    ->distinct('g.nom')
    ->getQuery()
    ->getResult();


}
}
 
 
 
    // /**
    //  * @return Auteur[] Returns an array of Auteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Auteur
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        
    }
    */


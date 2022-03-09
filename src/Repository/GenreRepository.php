<?php

namespace App\Repository;

use App\Entity\Genre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr\Math;

/**
 * @method Genre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Genre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Genre[]    findAll()
 * @method Genre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GenreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Genre::class);
    }
    public function GenreSansLivres() {
        $qb = $this->createQueryBuilder('g');
        $qb = $qb ->innerJoin('g.livres','l')
                  ->having('count(l) = 0')
                  ->groupby('g.id')
                  ->getQuery();
            return $qb->getResult();

            
    }
    
    public function PagesTotales($genre){

        $qb = $this->createQueryBuilder('g')
                   ->select('sum(l.nbpages) as nb')
                   ->innerJoin('g.livres','l')
                   ->where('g.id = :genre')
                   ->setParameter('genre',$genre)
                   ->getQuery();
           return  $qb->getResult();
}
public function auteursdugenre($genre){


    return $this->createQueryBuilder('g')
    ->select('a.nomPrenom')
    ->innerJoin('g.livres', 'l')
    ->where('g.id = :id')
    ->setParameter('id',$genre)
    ->leftJoin('App\Entity\Livre', 'livre', 'WITH', 'livre.id = l.id')
    ->innerJoin('livre.auteurs', 'a')
    ->distinct('a.nomPrenom')
    ->getQuery()
    ->getResult();


}

public function PagesMoyenne($genre){

    $qb = $this->createQueryBuilder('g')
               ->select('avg(l.nbpages) as m')
               ->innerJoin('g.livres','l')
               ->where('g.id = :genre')
               ->setParameter('genre',$genre)
               ->getQuery();
       return  $qb->getResult();
}

    public function genresOrdreChrono($id) {
        return $this->createQueryBuilder('g')
            ->leftJoin('g.livres', 'l')
            ->addSelect('l')
            ->leftJoin('l.auteurs', 'a')
            ->addSelect('a')
            ->andWhere('a.id = ?1')
            ->setParameter('1', $id)
            ->orderBy('l.dateDeParution')
            ->getQuery()
            ->getResult();
    }



    // /**
    //  * @return Genre[] Returns an array of Genre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Genre
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

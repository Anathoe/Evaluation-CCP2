<?php

namespace App\Repository;

use App\Entity\WomenFront;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WomenFront|null find($id, $lockMode = null, $lockVersion = null)
 * @method WomenFront|null findOneBy(array $criteria, array $orderBy = null)
 * @method WomenFront[]    findAll()
 * @method WomenFront[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WomenFrontRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WomenFront::class);
    }

    // /**
    //  * @return WomenFront[] Returns an array of WomenFront objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WomenFront
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

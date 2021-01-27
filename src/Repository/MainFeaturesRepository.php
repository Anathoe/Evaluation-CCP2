<?php

namespace App\Repository;

use App\Entity\MainFeatures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MainFeatures|null find($id, $lockMode = null, $lockVersion = null)
 * @method MainFeatures|null findOneBy(array $criteria, array $orderBy = null)
 * @method MainFeatures[]    findAll()
 * @method MainFeatures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MainFeaturesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MainFeatures::class);
    }

    // /**
    //  * @return MainFeatures[] Returns an array of MainFeatures objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MainFeatures
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

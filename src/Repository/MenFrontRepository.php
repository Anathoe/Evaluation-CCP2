<?php

namespace App\Repository;

use App\Entity\MenFront;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MenFront|null find($id, $lockMode = null, $lockVersion = null)
 * @method MenFront|null findOneBy(array $criteria, array $orderBy = null)
 * @method MenFront[]    findAll()
 * @method MenFront[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenFrontRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MenFront::class);
    }

    // /**
    //  * @return MenFront[] Returns an array of MenFront objects
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
    public function findOneBySomeField($value): ?MenFront
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

<?php

namespace App\Repository;

use App\Entity\HelpFront;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HelpFront|null find($id, $lockMode = null, $lockVersion = null)
 * @method HelpFront|null findOneBy(array $criteria, array $orderBy = null)
 * @method HelpFront[]    findAll()
 * @method HelpFront[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HelpFrontRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HelpFront::class);
    }

    // /**
    //  * @return HelpFront[] Returns an array of HelpFront objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HelpFront
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

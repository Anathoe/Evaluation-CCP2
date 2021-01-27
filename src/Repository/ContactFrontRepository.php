<?php

namespace App\Repository;

use App\Entity\ContactFront;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContactFront|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactFront|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactFront[]    findAll()
 * @method ContactFront[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactFrontRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactFront::class);
    }

    // /**
    //  * @return ContactFront[] Returns an array of ContactFront objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContactFront
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

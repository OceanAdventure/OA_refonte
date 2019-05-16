<?php

namespace App\Repository;

use App\Entity\SurfCampFuert;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SurfCampFuert|null find($id, $lockMode = null, $lockVersion = null)
 * @method SurfCampFuert|null findOneBy(array $criteria, array $orderBy = null)
 * @method SurfCampFuert[]    findAll()
 * @method SurfCampFuert[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SurfCampFuertRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SurfCampFuert::class);
    }

    // /**
    //  * @return SurfCampFuert[] Returns an array of SurfCampFuert objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SurfCampFuert
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

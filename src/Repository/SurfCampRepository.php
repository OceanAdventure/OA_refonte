<?php

namespace App\Repository;

use App\Entity\SurfCamp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SurfCamp|null find($id, $lockMode = null, $lockVersion = null)
 * @method SurfCamp|null findOneBy(array $criteria, array $orderBy = null)
 * @method SurfCamp[]    findAll()
 * @method SurfCamp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SurfCampRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SurfCamp::class);
    }

    // /**
    //  * @return SurfCamp[] Returns an array of SurfCamp objects
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
    public function findOneBySomeField($value): ?SurfCamp
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

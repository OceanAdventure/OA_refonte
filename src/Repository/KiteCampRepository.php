<?php

namespace App\Repository;

use App\Entity\KiteCamp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KiteCamp|null find($id, $lockMode = null, $lockVersion = null)
 * @method KiteCamp|null findOneBy(array $criteria, array $orderBy = null)
 * @method KiteCamp[]    findAll()
 * @method KiteCamp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KiteCampRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KiteCamp::class);
    }

    // /**
    //  * @return KiteCamp[] Returns an array of KiteCamp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?KiteCamp
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

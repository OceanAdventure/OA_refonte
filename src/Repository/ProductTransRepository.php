<?php

namespace App\Repository;

use App\Entity\ProductTrans;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProductTrans|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductTrans|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductTrans[]    findAll()
 * @method ProductTrans[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductTransRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProductTrans::class);
    }

    // /**
    //  * @return ProductTrans[] Returns an array of ProductTrans objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProductTrans
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

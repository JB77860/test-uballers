<?php

namespace App\Repository;

use App\Entity\Inscrits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Inscrits|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inscrits|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inscrits[]    findAll()
 * @method Inscrits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscritsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Inscrits::class);
    }

    // /**
    //  * @return Inscrits[] Returns an array of Inscrits objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Inscrits
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\SymfonyGallery;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SymfonyGallery|null find($id, $lockMode = null, $lockVersion = null)
 * @method SymfonyGallery|null findOneBy(array $criteria, array $orderBy = null)
 * @method SymfonyGallery[]    findAll()
 * @method SymfonyGallery[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SymfonyGalleryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SymfonyGallery::class);
    }

    // /**
    //  * @return SymfonyGallery[] Returns an array of SymfonyGallery objects
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
    public function findOneBySomeField($value): ?SymfonyGallery
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

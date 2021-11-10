<?php

namespace App\Repository;

use App\Entity\ImageId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImageId|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageId|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageId[]    findAll()
 * @method ImageId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageId::class);
    }

    // /**
    //  * @return ImageId[] Returns an array of ImageId objects
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
    public function findOneBySomeField($value): ?ImageId
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

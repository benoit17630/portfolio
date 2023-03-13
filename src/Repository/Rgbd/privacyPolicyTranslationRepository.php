<?php

namespace App\Repository\Rgbd;

use App\Entity\Rgbd\privacyPolicyTranslation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<privacyPolicyTranslation>
 *
 * @method privacyPolicyTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method privacyPolicyTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method privacyPolicyTranslation[]    findAll()
 * @method privacyPolicyTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class privacyPolicyTranslationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, privacyPolicyTranslation::class);
    }

    public function save(privacyPolicyTranslation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(privacyPolicyTranslation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return privacyPolicyTranslation[] Returns an array of privacyPolicyTranslation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?privacyPolicyTranslation
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

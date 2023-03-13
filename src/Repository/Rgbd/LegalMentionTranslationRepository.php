<?php

namespace App\Repository\Rgbd;

use App\Entity\Rgbd\LegalMentionTranslation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LegalMentionTranslation>
 *
 * @method LegalMentionTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method LegalMentionTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method LegalMentionTranslation[]    findAll()
 * @method LegalMentionTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegalMentionTranslationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegalMentionTranslation::class);
    }

    public function save(LegalMentionTranslation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LegalMentionTranslation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return LegalMentionTranslation[] Returns an array of LegalMentionTranslation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LegalMentionTranslation
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

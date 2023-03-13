<?php

namespace App\Repository\Rgbd;

use App\Entity\Rgbd\privacyPolicy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<privacyPolicy>
 *
 * @method privacyPolicy|null find($id, $lockMode = null, $lockVersion = null)
 * @method privacyPolicy|null findOneBy(array $criteria, array $orderBy = null)
 * @method privacyPolicy[]    findAll()
 * @method privacyPolicy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class privacyPolicyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, privacyPolicy::class);
    }

    public function save(privacyPolicy $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(privacyPolicy $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return privacyPolicy[] Returns an array of privacyPolicy objects
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

//    public function findOneBySomeField($value): ?privacyPolicy
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

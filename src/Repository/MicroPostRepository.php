<?php

namespace App\Repository;

use App\Entity\MicroPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MicroPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method MicroPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method MicroPost[]    findAll()
 *         = null, $offset = null)
 */
class MicroPostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct(
            $registry,
            MicroPost::class
        );
    }

    public function findAllByUsers(Collection $users)
    {
        $qb = $this->createQueryBuilder('p');

        return $qb->select('p')
            ->where('p.user IN (:following)')
            ->setParameter('following', $users)
            ->orderBy('p.time', 'DESC')
            ->getQuery()
            ->getResult();
    }
}

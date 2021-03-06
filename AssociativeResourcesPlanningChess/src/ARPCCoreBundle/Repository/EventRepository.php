<?php

namespace ARPCCoreBundle\Repository;

/**
 * EventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllEventsByClub($clubCode)
    {
        $qb = $this
            ->createQueryBuilder('event')
            ->join('event.club', 'club')
            ->addSelect('club')
            ->where('club.code = :code')
            ->setParameter('code', $clubCode);

        return $qb->getQuery()->getResult();
    }
}

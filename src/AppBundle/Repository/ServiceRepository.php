<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/20/2018
 * Time: 4:08 PM
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class ServiceRepository extends EntityRepository
{
    public function findAllOrderedByABC()
    {
        return $this->createQueryBuilder('service')
            ->orderBy('service.name', 'ASC')
            ->getQuery()
            ->execute();
    }
}
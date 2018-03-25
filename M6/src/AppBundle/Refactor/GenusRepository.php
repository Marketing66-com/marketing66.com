<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/18/2018
 * Time: 10:05 AM
 */

namespace AppBundle\Refactor;


use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    /**
     * @return Genus[]
     */
    public function findAllPublishedOrderedBySize()
    {
        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->orderBy('genus.speciesCount', 'DESC')
            ->getQuery()
            ->execute();
    }
}
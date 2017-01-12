<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ReparationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReparationRepository extends EntityRepository
{

 public function findByVehicule($vehicule,$operation)
{
  $qb = $this->createQueryBuilder('r')
  ->where('r.operation=:operation')
  ->andWhere('r.vehicule=:vehicule')
  ->setParameter('operation', $operation)
  ->setParameter('vehicule', $vehicule); 
   $qb->orderBy('r.dateSave', 'DESC');   
 return $qb->getQuery()->getResult();

}

 public function findLastByVehicule($vehicule,$operation)
{
  $qb = $this->createQueryBuilder('r')
  ->where('r.operation=:operation')
  ->andWhere('r.vehicule=:vehicule')
  ->setParameter('operation', $operation)
  ->setParameter('vehicule', $vehicule)
  ->orderBy('r.dateSave', 'DESC')
  ->setMaxResults(1); 
 return $qb->getQuery()->getOneOrNullResult();

}  
}

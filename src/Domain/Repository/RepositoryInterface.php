<?php

namespace BillingSystem\Invoicer\Domain\Repository;


/**
 * Interface RepositoryInterface
 * @package BillingSystem\Invoicer\Domain\Repository
 */
interface RepositoryInterface
{
    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id);

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $entity
     * @return mixed
     */
    public function persist($entity);

    /**
     * @return mixed
     */
    public function begin();

    /**
     * @return mixed
     */
    public function commit();
}

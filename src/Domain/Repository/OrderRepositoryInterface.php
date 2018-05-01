<?php

namespace BillingSystem\Invoicer\Domain\Repository;


/**
 * Interface OrderRepositoryInterface
 * @package BillingSystem\Invoicer\Domain\Repository
 */
interface OrderRepositoryInterface extends RepositoryInterface
{
    /**
     * @return mixed
     */
    public function getUninvoicedOrders();
}

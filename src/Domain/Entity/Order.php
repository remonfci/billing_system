<?php
declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Entity;


/**
 * Class Order
 * @package BillingSystem\Invoicer\Domain\Entity
 */
class Order extends AbstractEntity
{
    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @var int
     */
    protected $orderNumber;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $total;

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return Order
     */
    public function setCustomer($customer): Order
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderNumber(): int
    {
        return $this->orderNumber;
    }

    /**
     * @param int $orderNumber
     * @return Order
     */
    public function setOrderNumber($orderNumber): Order
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Order
     */
    public function setDescription($description): Order
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return Order
     */
    public function setTotal($total): Order
    {
        $this->total = $total;
    }
}

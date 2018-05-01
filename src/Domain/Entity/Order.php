<?php
declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Entity;


/**
 * Order's entity class
 *
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
    public function setCustomer(Customer $customer): Order
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
    public function setOrderNumber(int $orderNumber): Order
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
    public function setDescription(string $description): Order
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param $total
     * @return Order
     */
    public function setTotal(int $total): Order
    {
        $this->total = $total;
        return $this;
    }
}

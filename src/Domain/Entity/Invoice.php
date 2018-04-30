<?php
declare(strict_types=1);

namespace BillingSystem\Invoicer\Domain\Entity;


/**
 * Invoice's entity class
 *
 * @package BillingSystem\Invoicer\Domain\Entity
 */
class Invoice extends AbstractEntity
{
    /**
     * @var Order
     */
    protected $order;
    /**
     * @var \DateTime
     */
    protected $invoiceDate;
    /**
     * @var int
     */
    protected $total;

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     * @return Invoice
     */
    public function setOrder(Order $order): Invoice
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate(): \DateTime
    {
        return $this->invoiceDate;
    }

    /**
     * @param \DateTime $invoiceDate
     * @return Invoice
     */
    public function setInvoiceDate(\DateTime $invoiceDate): Invoice
    {
        $this->invoiceDate = $invoiceDate;
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
     * @return Invoice
     */
    public function setTotal(int $total): Invoice
    {
        $this->total = $total;
    }
}

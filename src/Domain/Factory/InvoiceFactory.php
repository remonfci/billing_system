<?php

namespace BillingSystem\Invoicer\Domain\Factory;


use BillingSystem\Invoicer\Domain\Entity\Invoice;
use BillingSystem\Invoicer\Domain\Entity\Order;

class InvoiceFactory
{
    public function createFromOrder(Order $order): Invoice
    {
        $invoice = new Invoice();
        $invoice->setOrder($order);
        $invoice->setInvoiceDate(new \DateTime());
        $invoice->setTotal($order->getTotal());

        return $invoice;
    }
}

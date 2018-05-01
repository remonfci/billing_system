<?php

use BillingSystem\Invoicer\Domain\Entity\Order;
use BillingSystem\Invoicer\Domain\Factory\InvoiceFactory;

describe('InvoiceFactory', function () {
    describe('->createFromOrder()', function () {
       it('should return an invoice object', function () {
           $order = new Order();
           $factory = new InvoiceFactory();
           $invoice = $factory->createFromOrder($order);

           expect($invoice)->to->be->instanceof(
               'BillingSystem\Invoicer\Domain\Entity\Invoice'
           );
       });

        it('should set the total of the invoice', function () {
            $order = new Order();
            $order->setTotal(500);
            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);
            expect($invoice->getTotal())->to->equal(500);
        });

        it('should associate the Order to the Invoice', function () {
            $order = new Order();
            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);
            expect($invoice->getOrder())->to->equal($order);
        });

        it('should set the date of the Invoice', function () {
            $order = new Order();
            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);
            expect($invoice->getInvoiceDate()->format('Y-m-d H'))
                ->to->loosely->equal((new \DateTime())->format('Y-m-d H'));
        });
    });
});

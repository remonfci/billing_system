<?php

namespace BillingSystem\Invoicer\Domain\Entity;


/**
 * Class AbstractEntity
 * @package BillingSystem\Invoicer\Domain\Entity
 */
abstract class AbstractEntity
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

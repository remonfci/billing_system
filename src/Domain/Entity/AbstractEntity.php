<?php
declare(strict_types=1);

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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): AbstractEntity
    {
        $this->id = $id;
        return $this;
    }
}

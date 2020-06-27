<?php
declare(strict_types=1);

namespace Money;

class Dollar
{
    /** @var int */
    protected $amount;

    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multipler
     */
    public function times(int $multipler)
    {
        $this->amount *= $multipler;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
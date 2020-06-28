<?php
declare(strict_types=1);

namespace Money;

class Franc extends Money
{
    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multipler
     * @return Franc
     */
    public function times(int $multipler): Franc
    {
        return new Franc($this->amount * $multipler);
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
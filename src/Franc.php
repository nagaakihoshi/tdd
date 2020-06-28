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
     * @return Money
     */
    public function times(int $multipler): Money
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
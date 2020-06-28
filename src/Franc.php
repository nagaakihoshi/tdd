<?php
declare(strict_types=1);

namespace Money;

class Franc extends Money
{
    /**
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    /**
     * @param int $multipler
     * @return Money
     */
    public function times(int $multipler): Money
    {
        return Money::franc($this->amount * $multipler);
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
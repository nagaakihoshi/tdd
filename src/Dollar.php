<?php
declare(strict_types=1);

namespace Money;

class Dollar extends Money
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
     * @return Dollar
     */
    public function times(int $multipler): Dollar
    {
        return new Dollar($this->amount * $multipler);
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
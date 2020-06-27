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

    /**
     * @param Dollar $dollar
     * @return bool
     */
    public function equals(Dollar $dollar): bool
    {
        return $this->amount === $dollar->getAmount();
    }
}
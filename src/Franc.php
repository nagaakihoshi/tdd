<?php
declare(strict_types=1);

namespace Money;

class Franc
{
    /** @var int */
    private $amount;

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

    /**
     * @param Franc $franc
     * @return bool
     */
    public function equals(Franc $franc): bool
    {
        return $this->amount === $franc->getAmount();
    }
}
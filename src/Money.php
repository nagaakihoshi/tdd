<?php
declare(strict_types=1);

namespace Money;

abstract class Money
{
    /** @var int */
    protected $amount;

    /** @var string */
    protected $currency;

    abstract protected function times(int $multipler): Money;

    /**
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money): bool
    {
        return $this->amount === $money->getAmount()
            && get_class($this) === get_class($money);
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, "USD");
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Franc($amount, "CHF");
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }
}
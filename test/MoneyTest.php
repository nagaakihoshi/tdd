<?php
declare(strict_types=1);

namespace Money\Test;

use PHPUnit\Framework\TestCase;
use Money\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->getAmount());
        $product = $five->times(3);
        $this->assertEquals(15, $product->getAmount());
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(6))->equals(new Dollar(5)));
    }
}
<?php
declare(strict_types=1);

namespace Money\Test;

use PHPUnit\Framework\TestCase;
use Money\Dollar;
use Money\Franc;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);

        $this->assertEquals(new Dollar(10), $five->times(2));

        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));

        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));

        $this->assertTrue((new Franc(5))->equals(new Franc(5)));

        $this->assertFalse((new Franc(5))->equals(new Franc(6)));

        $this->assertFalse((new Franc(5))->equals(new Dollar(5)));
    }

    public function testFrancMultiplication()
    {
        $five = new Franc(5);

        $this->assertEquals(new Franc(10), $five->times(2));

        $this->assertEquals(new Franc(15), $five->times(3));
    }
}
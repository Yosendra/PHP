<?php

namespace BelajarPHPUnit;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();

        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());

        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());

        $counter->increment();
        self::assertEquals(3, $counter->getCounter());
    }

    # Penambahkan annotasi @test, nama function unit test tidak perlu berawalan "test.."
    /**
     * @test
     */
    public function increment()
    {
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
    }
}
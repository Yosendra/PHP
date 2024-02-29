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
        Assert::assertEquals(1, $counter->getCounter());        # assert melalui dengan fungsi statis assertEquals() dari kelas Assert

        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());         # akses fungsi assertEquals() melalui $this

        $counter->increment();
        self::assertEquals(3, $counter->getCounter());          # akses fungsi assertEquals() melalui self
    }
}
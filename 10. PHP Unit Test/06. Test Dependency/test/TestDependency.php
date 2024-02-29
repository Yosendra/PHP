<?php

namespace BelajarPHPUnit;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class TestDependency extends TestCase
{
    public function testFirst(): Counter
    {
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());

        return $counter;
    }

    # annotasi @depends, unit test ini bergantung pada unit test "testFirst"
    # jika testFirst gagal, testSecond juga akan gagal
    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter)                # perhatikan, function mempunyai parameter untuk menerima return dari unit test sebelumnya
    {
        $counter->increment();
        Assert::assertEquals(2, $counter->getCounter());
    }

}
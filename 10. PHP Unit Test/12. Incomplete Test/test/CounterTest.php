<?php

namespace BelajarPHPUnit;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    private Counter $counter;

    protected function setUp() : void 
    {
        $this->counter = new Counter();
    }

    # asumsikan unit test ini belum selesai
    public function testIncrement() 
    {   
        Assert::assertEquals(0, $this->counter->getCounter());
        Assert::markTestIncomplete("Need to be completed");         # tandai bahwa unit test belum selesai dengan function markTestIncomplete()
    }
}
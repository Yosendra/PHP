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

    public function testIncrement() 
    {   
        Assert::markTestSkipped("Skip this unit test");                 # skip unit test ini

        Assert::assertEquals(0, $this->counter->getCounter());
        Assert::markTestIncomplete("Need to be completed");
        Assert::assertEquals(0, $this->counter->getCounter());
    }

    /**
     * @requires OSFAMILY Windows
     * @requires PHP >= 8
     */
    public function testOnlyWindows()                   # anotasi @requires. Jika tidak terpenuhi, maka unit test ini akan dilewati
    {
        Assert::assertTrue(true, "Only in windows");
    }
}
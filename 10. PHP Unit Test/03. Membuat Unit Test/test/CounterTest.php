<?php

namespace BelajarPHPUnit;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase      # wajib meng-extends class TestCase
{
    public function testCounter()       # wajib prefix test di nama function unit test
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        echo PHP_EOL . $counter->getCounter() . PHP_EOL;
    }

    public function testOther()       # wajib prefix test di nama function unit test
    {
        echo PHP_EOL . 3 . PHP_EOL;
    }
}
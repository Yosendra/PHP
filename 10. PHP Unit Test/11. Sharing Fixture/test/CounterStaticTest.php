<?php

namespace BelajarPHPUnit;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
    static private Counter $counter;

    // protected function setUp(): void 
    // {
    //     self::$counter = new Counter();
    // }

    public static function setUpBeforeClass(): void             # setUpBeforeClass(), dipanggil hanya sekali di awal
    {
        self::$counter = new Counter();
    }

    public static function tearDownAfterClass(): void           # tearDownAfterClass(), dipanggil hanya sekali di akhir
    {
        self::$counter = new Counter();
    }

    public function testFirst() 
    {
        self::$counter->increment();
        Assert::assertEquals(1, self::$counter->getCounter());
    }

    public function testSecond() 
    {
        self::$counter->increment();
        Assert::assertEquals(2, self::$counter->getCounter());
    }
}
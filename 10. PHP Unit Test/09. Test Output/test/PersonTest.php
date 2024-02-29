<?php

namespace BelajarPHPUnit;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSuccess() 
    {
        $person = new Person("John");
        Assert::assertEquals("Hi Doe, my name is John", $person->sayHello("Doe"));    
    }

    public function testException() 
    {
        $person = new Person("John");
        self::expectException(\Exception::class);
        $person->sayHello(null);
    }

    public function testOutput() 
    {
        $person = new Person("John");
        self::expectOutputString("Good bye Doe" . PHP_EOL);             # expect output string "Good bye Doe"
        $person->sayGoodBye("Doe");
    }
}
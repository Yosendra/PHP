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
        self::expectException(\Exception::class);       # tentukan tipe exception yang di-assert
        $person->sayHello(null);                        # picu exception
    }
}
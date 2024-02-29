<?php

namespace BelajarPHPUnit;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;

    protected function setUp() : void           # setUp() method, dijalankan setiap kali sebelum unit test dieksekusi
    {
        $this->person = new Person("John");     # fixture
    }

    protected function tearDown() : void        # tearDown() method, dijalankan setiap kali setelah unit test dieksekusi
    {
        # echo "tear down" . PHP_EOL;
    }

    # anotasi @before
    /**
     * @before
     */
    public function createPerson() : void 
    {
        $this->person = new Person("John");
    }

    public function testSuccess() 
    {
        // $person = new Person("John");        # tidak diperlukan lagi
        Assert::assertEquals("Hi Doe, my name is John", $this->person->sayHello("Doe"));    
    }

    public function testException() 
    {
        // $person = new Person("John");        # tidak diperlukan lagi
        self::expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testOutput() 
    {
        // $person = new Person("John");        # tidak diperlukan lagi
        self::expectOutputString("Good bye Doe" . PHP_EOL);
        $this->person->sayGoodBye("Doe");
    }
}
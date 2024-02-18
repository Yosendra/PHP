<?php

class Person
{
    const AUTHOR = "John Doe";

    var string $name;
    var string $address;
    var string $country;

    function sayHello(?string $name)
    {
        if (is_null($name))
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        else
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
    }

    function info()
    {
        echo "Author: " . self::AUTHOR .PHP_EOL;        // keyword 'self' mereference kepada kelas Person itu sendiri
    }
}
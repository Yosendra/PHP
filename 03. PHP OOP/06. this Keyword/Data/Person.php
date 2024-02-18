<?php

class Person
{
    var string $name;
    var string $address;
    var string $country;

    function sayHello(?string $name)        // nullable parameter type
    {
        if (is_null($name))
            echo "Hi, my name is {$this->name}" . PHP_EOL;              // this mengarah ke objek saat ini
        else
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
    }
}
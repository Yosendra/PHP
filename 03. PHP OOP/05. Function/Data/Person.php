<?php

class Person
{
    var string $name;
    var string $address;
    var string $country;

    function sayHello(string $name)         # deklarasikan method
    {
        echo "Hello $name" . PHP_EOL;
    }
}
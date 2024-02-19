<?php

class Manager
{
    var string $name;

    function sayHello(string $name): void                   # funciton sayHello di Parent class
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}
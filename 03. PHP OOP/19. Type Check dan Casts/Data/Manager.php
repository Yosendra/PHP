<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")        // parent constructor
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name,): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}
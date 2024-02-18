<?php

require_once __DIR__ . "/Manager.php";

class ViceManager extends Manager
{
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
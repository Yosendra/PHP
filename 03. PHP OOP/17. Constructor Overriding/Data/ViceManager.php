<?php

require_once __DIR__ . "/Manager.php";

class ViceManager extends Manager
{

    public function __construct(string $name = "")       # override parent constructor
    {
        # tidak wajib tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
<?php

abstract class Animal
{
    public string $name;
    public abstract function run();     # abstract function, tidak boleh berisi implementasi, hanya signaturenya saja
}

class Cat extends Animal
{
    public function run()               # override abstract function di child class (wajib)
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}
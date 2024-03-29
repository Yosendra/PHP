<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
class BackendProgrammer extends Programmer{}
class FrontendProgrammer extends Programmer{}

class Company
{
    public Programmer $programmer;
}

function sayHello(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer)                           # cek tipe data objek dengan operator instanceof
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    elseif ($programmer instanceof FrontendProgrammer) 
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    else
        echo "Hello Programmer $programmer->name" . PHP_EOL;
}
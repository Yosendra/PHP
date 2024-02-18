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
    public Programmer $programmer;                      # menerima objek Programmer dan turunannya
}

function sayHello(Programmer $programmer)               # menerima objek Programmer dan turunannya
{
    echo "Hello $programmer->name" . PHP_EOL;
}
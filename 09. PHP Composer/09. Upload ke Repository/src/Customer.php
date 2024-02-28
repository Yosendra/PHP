<?php

namespace BelajarComposer\Library;          # perhatikan namespacenya

class Customer
{
    public function __construct(private string $name) 
    {
    }

    function sayHello(string $name) : string 
    {
        return "Hello $name, My name is $this->name";
    }
}
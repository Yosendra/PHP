<?php

namespace BelajarComposer\Data;     # perhatikan namespacenya

class People
{
    public function __construct(private string $name) 
    {
    }

    function sayHello(string $name) : string 
    {
        return "Hello $name, My name is $this->name";
    }
}
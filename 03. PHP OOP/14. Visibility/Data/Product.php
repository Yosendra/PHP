<?php

class Product
{
    private string $name;           // private modifier
    private int $price;

    public function __construct(string $name, int $price) 
    {
        $this->name = $name;        // name dan price masih dapat diakses di dalam kelas
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
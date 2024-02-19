<?php

class Category
{
    # fields
    private string $name;
    private bool $expensive;

    public function getName(): string                       # getter method of $name
    {
        return $this->name;
    }

    public function setName(string $name): void             # setter method of $name
    {
        if (trim($name) != "")                              # keuntungan menggunakan setter kita dapat 
            $this->name = $name;                            # melakukan validasi sebelum mengeset nilai fieldnya
    }

    public function isExpensive(): bool                     # getter method of $name
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void     # setter method of $expensive
    {
        $this->expensive = $expensive;
    }
}
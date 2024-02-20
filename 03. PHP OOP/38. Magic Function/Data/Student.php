<?php

class Student
{
    public int $id;
    public string $name;
    public int $age;

    function __toString()                       # magic function __toString()
    {
        return "Student - id: $this->id, name: $this->name, age: $this->age";
    }

    function __invoke(...$arguments)            # magic function __invoke()
    {
        $join = join(", ", $arguments);
        echo "Invoke Student with arguments $join" . PHP_EOL;
    }
}
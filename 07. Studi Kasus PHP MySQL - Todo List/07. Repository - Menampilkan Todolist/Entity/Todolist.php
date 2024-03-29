<?php

namespace Entity;

class Todolist
{
    private int $id;
    private string $todo;

    public function __construct(string $todo = "")
    {
        $this->todo = $todo;
    }

    public function getTodo(): string
    {
        return $this->todo;
    }
    public function setTodo($todo): void
    {
        $this->todo = $todo;
    }

    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
}
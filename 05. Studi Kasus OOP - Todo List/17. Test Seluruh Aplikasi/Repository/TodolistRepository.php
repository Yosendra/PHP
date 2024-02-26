<?php

namespace Repository;

require_once __DIR__ . "/../Entity/Todolist.php";

use Entity\Todolist;

interface ITodolistRepository
{
    function save(Todolist $todolist): void;
    function remove(int $number): bool;
    function findAll(): array;
}

class TodolistRepository implements ITodolistRepository
{
    public array $todolist = array();

    function save(Todolist $todolist): void
    {
        $number = sizeof($this->todolist) + 1;
        $this->todolist[$number] = $todolist;
    }

    function remove(int $number): bool
    {
        $lastIndex = sizeof($this->todolist);
        if ($number > $lastIndex)
            return false;

        for ($i = $number; $i < $lastIndex; $i++)
            $this->todolist[$i] = $this->todolist[$i + 1];

        unset($this->todolist[$lastIndex]);

        return true;
    }

    function findAll(): array
    {
        return $this->todolist;
    }
}
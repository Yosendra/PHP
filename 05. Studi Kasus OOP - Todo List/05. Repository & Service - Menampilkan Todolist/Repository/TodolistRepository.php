<?php

namespace Repository;

use Entity\Todolist;

interface ITodolistRepository
{
    function save(Todolist $todolist): void;
    function remove(int $number): bool;
    function findAll(): array;
}

class TodolistRepository implements ITodolistRepository
{
    private array $todolist = array();

    function save(Todolist $todolist): void
    {

    }

    function remove(int $number): bool
    {

    }

    function findAll(): array
    {
        return $this->todolist;
    }
}
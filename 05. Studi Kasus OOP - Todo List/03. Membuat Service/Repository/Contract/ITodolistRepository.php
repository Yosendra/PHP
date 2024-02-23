<?php

namespace Repository\Contract;

use Entity\Todolist;

interface ITodolistRepository
{
    function save(Todolist $todolist): void;
    function remove(int $number): bool;
    function findAll(): array;
}
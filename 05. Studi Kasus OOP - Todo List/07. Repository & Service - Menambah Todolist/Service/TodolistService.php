<?php

namespace Service;

use Entity\Todolist;
use Repository\ITodolistRepository;

interface ITodolistService
{
    function showTodolist();
    function addTodolist(string $todo);
    function removeTodolist(int $number);
}

class TodolistService implements ITodolistService
{
    private ITodolistRepository $todolistRepository;

    public function __construct(ITodolistRepository $todolistRepository) 
    {
        $this->todolistRepository = $todolistRepository;
    }

    function showTodolist()
    {
        echo "TODOLIST" . PHP_EOL;

        $todolist = $this->todolistRepository->findAll();

        foreach ($todolist as $number => $value):
            echo "$number. $value" . PHP_EOL;
        endforeach;
    }

    function addTodolist(string $todo)
    {
        $todo = new Todolist($todo);
        $this->todolistRepository->save($todo);
        echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
    }

    function removeTodolist(int $number)
    {

    }
}
<?php

namespace Service\Contract;

interface ITodolistService
{
    function showTodolist();
    function addTodolist(string $todo);
    function removeTodolist(int $number);
}
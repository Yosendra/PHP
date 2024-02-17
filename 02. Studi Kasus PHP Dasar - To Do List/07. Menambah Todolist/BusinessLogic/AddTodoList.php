<?php

/**
 * Menambahkan todo ke list
 */
function addTodoList(string $todo) 
{
    global $todoList;
    
    $number = sizeof($todoList);

    $todoList[$number] = $todo;
}
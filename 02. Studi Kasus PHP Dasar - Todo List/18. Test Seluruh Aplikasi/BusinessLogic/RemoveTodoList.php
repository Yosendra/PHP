<?php

/**
 * Menghapus todo di list
 */
function removeTodoList(int $number) : bool
{
    global $todoList;

    $lastIndex = sizeof($todoList);

    if ($number > $lastIndex)
        return false;
    
    for ($i = $number; $i < $lastIndex; $i++)
        $todoList[$i] = $todoList[$i + 1];

    unset($todoList[$lastIndex]);

    return true;
}
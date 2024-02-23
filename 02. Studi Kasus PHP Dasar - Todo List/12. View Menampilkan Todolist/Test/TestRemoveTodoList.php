<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList("Gosok gigi");
addTodoList("Shampoan");
addTodoList("Rapikan kamar");

showTodoList();

removeTodoList(3);
showTodoList();

removeTodoList(1);
showTodoList();

$isSuccess = removeTodoList(2);
var_dump($isSuccess);
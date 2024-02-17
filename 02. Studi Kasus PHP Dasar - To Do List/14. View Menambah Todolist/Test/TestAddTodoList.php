<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("Gosok gigi");
addTodoList("Shampoan");
addTodoList("Rapikan kamar");

var_dump($todoList);
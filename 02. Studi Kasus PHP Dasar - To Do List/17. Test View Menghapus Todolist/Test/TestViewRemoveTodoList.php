<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList("Tidur");
addTodoList("Makan");
addTodoList("Mandi");

showTodoList();

viewRemoveTodoList();

showTodoList();
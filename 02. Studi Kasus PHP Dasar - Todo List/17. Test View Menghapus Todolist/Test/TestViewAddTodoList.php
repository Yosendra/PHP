<?php

require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList("Makan");
addTodoList("Tidur");
addTodoList("Mandi");

viewAddTodoList();
showTodoList();

viewAddTodoList();
showTodoList();
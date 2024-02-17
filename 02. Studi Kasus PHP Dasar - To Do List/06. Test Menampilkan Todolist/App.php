<?php
/*

Bestpractice menggunakan konstan __DIR__ ketika mengambil file dengan funsi require atau include

Look at: 
• TestShowTodoList.php

*/

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "View/ViewShowTodoList.php";

echo "Aplikasi TodoList" . PHP_EOL;

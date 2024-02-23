<?php
/*

Input data di PHP: https://www.php.net/manual/en/function.fgets.php
Tes menggunakan Integrated Terminal agar dapat memberikan input di keyboard

Look at: 
• Input.php
• TestInput.php

*/

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "View/ViewShowTodoList.php";

echo "Aplikasi TodoList" . PHP_EOL;

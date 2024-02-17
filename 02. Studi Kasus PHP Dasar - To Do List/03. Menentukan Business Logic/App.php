<?php
/*

Business Logic adalah operasi atau fitur yang ada di aplikasi.

Look at: 
• AddTodoList.php
• RemoveTodoList.php
• ShowTodoList.php

*/

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

echo "Aplikasi TodoList" . PHP_EOL;


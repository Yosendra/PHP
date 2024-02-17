<?php

require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("Tidur");
addTodoList("Makan");
addTodoList("Mandi");
viewShowTodoList();
<?php
/*

Look at:
• Program.php

*/

require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";
require_once __DIR__ . "/Config/Database.php";

use Config\Database;
use Repository\TodolistRepository;
use Service\TodolistService;
use View\TodolistView;

$connection = Database::getConnection();
$todolistRepository = new TodolistRepository($connection);
$todolistService = new TodolistService($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();
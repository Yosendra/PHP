<?php
/*

Look at:
• Program.php

*/

require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";

use Repository\TodolistRepository;
use Service\TodolistService;
use View\TodolistView;

$todolistRepository = new TodolistRepository();
$todolistService = new TodolistService($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();
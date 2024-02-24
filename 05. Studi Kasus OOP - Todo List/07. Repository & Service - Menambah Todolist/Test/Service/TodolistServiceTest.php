<?php

namespace Test\Service;

require_once __DIR__ . "/../../Service/TodolistService.php";
require_once __DIR__ . "/../../Repository/TodolistRepository.php";
require_once __DIR__ . "/../../Entity/Todolist.php";

use Repository\TodolistRepository;
use Service\TodolistService;

function testShowTodolist()
{
    $todolistRepository = new TodolistRepository();
    $todolistRepository->todolist[1] = "Belajar PHP Dasar";
    $todolistRepository->todolist[2] = "Belajar PHP OOP";
    $todolistRepository->todolist[3] = "Belajar PHP Database";

    $todolistService = new TodolistService($todolistRepository);

    $todolistService->showTodolist();
}

testShowTodolist();
<?php

namespace Test\View;

require_once __DIR__ . "/../../View/TodolistView.php";
require_once __DIR__ . "/../../Service/TodolistService.php";
require_once __DIR__ . "/../../Repository/TodolistRepository.php";

use Repository\TodolistRepository;
use Service\TodolistService;
use View\TodolistView;

function testViewShowTodoList(): void
{
    $todolistRepository = new TodolistRepository();
    $todolistService = new TodolistService($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView = new TodolistView($todolistService);
    $todolistView->showTodolist();
}

function testViewAddTodoList(): void
{
    $todolistRepository = new TodolistRepository();
    $todolistService = new TodolistService($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistView = new TodolistView($todolistService);
    $todolistView->addTodolist();

    $todolistService->showTodolist();
}

function testViewRemoveTodoList(): void
{
    $todolistRepository = new TodolistRepository();
    $todolistService = new TodolistService($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistView = new TodolistView($todolistService);
    $todolistView->removeTodolist();

    $todolistService->showTodolist();
}

// testViewShowTodoList();
// testViewAddTodoList();
testViewRemoveTodoList();

<?php

namespace Test\View;

require_once __DIR__ . "/../../View/TodolistView.php";
require_once __DIR__ . "/../../Service/TodolistService.php";
require_once __DIR__ . "/../../Repository/TodolistRepository.php";
require_once __DIR__ . "/../../Config/Database.php";

use Config\Database;
use Repository\TodolistRepository;
use Service\TodolistService;
use View\TodolistView;

function testViewShowTodoList(): void
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepository($connection);
    $todolistService = new TodolistService($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView = new TodolistView($todolistService);
    $todolistView->showTodolist();
}

function testViewAddTodoList(): void
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepository($connection);
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
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepository($connection);
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

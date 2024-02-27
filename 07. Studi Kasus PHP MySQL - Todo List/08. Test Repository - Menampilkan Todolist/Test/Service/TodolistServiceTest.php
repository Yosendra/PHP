<?php

namespace Test\Service;

require_once __DIR__ . "/../../Service/TodolistService.php";
require_once __DIR__ . "/../../Repository/TodolistRepository.php";
require_once __DIR__ . "/../../Entity/Todolist.php";
require_once __DIR__ . "/../../Config/Database.php";

use Config\Database;
use Repository\TodolistRepository;
use Service\TodolistService;

function testShowTodolist()
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepository($connection);
    $todolistService = new TodolistService($todolistRepository);
    // $todolistService->addTodolist("Belajar PHP Dasar");
    // $todolistService->addTodolist("Belajar PHP OOP");
    // $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
}

function testAddTodolist()
{
    $connection = Database::getConnection();

    $todolistRepository = new TodolistRepository($connection);
    $todolistService = new TodolistService($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    
    $todolistService->showTodolist();
}

function testRemoveTodolist()
{
    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepository($connection);
    $todolistService = new TodolistService($todolistRepository);
    
    echo $todolistService->removeTodolist(5) . PHP_EOL;
    echo $todolistService->removeTodolist(4) . PHP_EOL;
    echo $todolistService->removeTodolist(3) . PHP_EOL;
    echo $todolistService->removeTodolist(2) . PHP_EOL;
    echo $todolistService->removeTodolist(1) . PHP_EOL;
}

testShowTodolist();
// testAddTodolist();
// testRemoveTodolist();
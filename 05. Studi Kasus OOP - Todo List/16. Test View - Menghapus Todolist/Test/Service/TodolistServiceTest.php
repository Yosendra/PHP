<?php

namespace Test\Service;

require_once __DIR__ . "/../../Service/TodolistService.php";
require_once __DIR__ . "/../../Repository/TodolistRepository.php";
require_once __DIR__ . "/../../Entity/Todolist.php";

use Repository\TodolistRepository;
use Service\TodolistService;
use Entity\Todolist;

function testShowTodolist()
{
    $todolistRepository = new TodolistRepository();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP Dasar");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP Database");

    $todolistService = new TodolistService($todolistRepository);

    $todolistService->showTodolist();
}

function testAddTodolist()
{
    $todolistRepository = new TodolistRepository();
    $todolistService = new TodolistService($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    
    $todolistService->showTodolist();
}

function testRemoveTodolist()
{
    $todolistRepository = new TodolistRepository();
    $todolistService = new TodolistService($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);
}

// testShowTodolist();
// testAddTodolist();
testRemoveTodolist();
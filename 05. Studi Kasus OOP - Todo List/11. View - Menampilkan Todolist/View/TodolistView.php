<?php

namespace View;

require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Helper\InputHelper;
use Service\ITodolistService;

class TodolistView
{
    private ITodolistService $todolistService;

    public function __construct(ITodolistService $todolistService) 
    {
        $this->todolistService = $todolistService;
    }

    function showTodolist(): void
    {
        while (true):
            $this->todolistService->showTodolist();
            
            echo "MENU" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;
    
            $pilihan = trim(InputHelper::input("Pilih"));
            if ($pilihan == "1")
                $this->addTodolist();
            elseif ($pilihan == "2")
                $this->removeTodolist();
            elseif ($pilihan == "x")
                break;
            else
                echo "Pilihan tidak dimengerti." . PHP_EOL;

            echo PHP_EOL;
        endwhile;
    
        echo "Sampai Jumpa Lagi" . PHP_EOL;
    }

    function addTodolist(): void
    {

    }

    function removeTodolist(): void
    {

    }
}
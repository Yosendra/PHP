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
        echo "MENAMBAH TODO" . PHP_EOL;

        $todo = InputHelper::input("Todo (x untuk batal)");
        if ($todo == "x")
            echo "Batal menambah TODO" . PHP_EOL;
        else
            $this->todolistService->addTodolist($todo);
    }

    function removeTodolist(): void
    {
        echo "MENGHAPUS TODO" . PHP_EOL;

        $pilihan = (int) trim(InputHelper::input("Nomor (x untuk batalkan)"));
        if ($pilihan == "x")
            echo "Batal menghapus todo" . PHP_EOL;
        else
            $this->todolistService->removeTodolist($pilihan);
    }
}
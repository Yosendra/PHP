<?php

namespace Repository;

require_once __DIR__ . "/../Entity/Todolist.php";

use Entity\Todolist;

interface ITodolistRepository
{
    function save(Todolist $todolist): void;
    function remove(int $number): bool;
    function findAll(): array;
}

class TodolistRepository implements ITodolistRepository
{
    public array $todolist = array();
    private \PDO $connection;

    public function __construct(\PDO $connection) 
    {
        $this->connection = $connection;
    }

    function save(Todolist $todolist): void
    {
        $sql = "INSERT INTO todolist(todo) VALUES(?)";
        $result = $this->connection->prepare($sql);
        $result->execute([$todolist->getTodo()]);
    }

    function remove(int $number): bool
    {
        $sql = "SELECT id FROM todolist WHERE id = ?";
        $result = $this->connection->prepare($sql);
        $result->execute([$number]);

        if ($result->fetch()) 
        {
            $sql = "DELETE FROM todolist WHERE id = ?";
            $result = $this->connection->prepare($sql);
            $result->execute([$number]);

            return true;
        } 
        else 
        {
            return false;
        }
    }

    function findAll(): array
    {
        return $this->todolist;
    }
}
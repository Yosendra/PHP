<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_database";
    $username = "root";
    $password = "";
    $dataSourceName = "mysql:dbname=$database;host=$host:$port";

    return new PDO($dataSourceName, $username, $password);
}
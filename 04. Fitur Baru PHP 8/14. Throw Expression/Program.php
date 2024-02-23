<?php
/*

Throw Expression
Throw adalah sebuat statement.
Hal ini menyebabkan kadang kita kesulitan menggunakan throw di beberapa tempat yang membutuhkan
expression, sepreti ternary operator misalnya.
Di PHP 8 sekarang throw adalah sebuah expression. Artinya dia memiliki nilai seperti di ternary operator
Detail: https://wiki.php.net/rfc/throw_expression

*/

$name = "John";
$result = $name == "John" ? "Success" : throw new Exception("Ups");         # throw di ternary operator


function validate(?string $name)
{
    $result = $name ?? throw new Exception("Null");                         # throw di null coalescing
    echo "Hello $result" . PHP_EOL;
}
validate("John");
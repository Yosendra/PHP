<?php
/* 

Recursive Function
Recursive Function adalah function yang memanggil dirinya sendiri.

*/

function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);     // factorialRecursive memanggil dirinya sendiri
    }
}
var_dump(factorialRecursive(3));
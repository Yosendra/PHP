<?php
/* 

PHP memiliki banya function dengan nama prefix "is_"
Function-function ini digunakan untuk mengecek tipe data dari sebuah variable atau value

is_string()             Apakah bertipe data string
is_bool()               Apakah bertipe data boolean
is_int()                Apakah bertipe data integer
is_array()              Apakah bertipe data array
is_callable()           Apakah bertipe data callable

*/

$data = "sample";
var_dump(is_string($data));
var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_array($data));
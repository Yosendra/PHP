<?php
/* 

Array Function : https://www.php.net/manual/en/ref.array.php

array_keys()            Mengambil semua keys milik array
array_values()          Mengambil semua value milik array
array_map()             Mengubah data array dengan callback
sort()                  Mengurutkan element array
rsort()                 Mengurutkan terbalik element array
shuffle()               Mengubah posisi element-element array secara acak

*/

$array = [1, 2, 3, 4, 5, 6, 7, 8];
var_dump(array_map(fn($element) => $element * 2, $array));      // array_map

rsort($array);                                                  // rsort
var_dump($array);


$person = array(
    "firstName" => "John",
    "lastName" => "Doe"
);
var_dump(array_keys($person));                                   // array_keys
var_dump(array_values($person));                                 // array_values
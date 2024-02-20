<?php
/*

stdClass
stadClass adalah class kosong bawaan dari PHP.
Biasanya digunakan ketika melakukan konversi dari tipe lain menjadi tipe object.
stdClass berguna ketika kita ingin melakukan konversi dari tipe data array ke object secara otomatis.

*/

$array = [
    "firstName" => "John",
    "lastName" => "Doe",
];

$object = (object)$array;
var_dump($object);                  # $object bertipe stdClass

echo $object->firstName . PHP_EOL;
echo $object->lastName . PHP_EOL;
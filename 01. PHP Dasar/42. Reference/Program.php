<?php
/* 

Reference
Reference adalah mengakses variable yang sama dengan nama variable yang berbeda.
Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya ikut berubah.
Untuk membuat reference terhadap variable kita gunakan karakter &

Assign by Reference
PHP Reference memungkinkan untuk membuat beberapa variable menuju value yang sama.

Pass by Reference
PHP memungkinkan untuk mengirim data berupa reference ke function

Returning Reference
PHP mampu mengembalikan reference pada function.
Hati-hati menggunakan fitur ini karena membingungkan.

*/

$nama = "John";
$ohterName = &$name;        // assign reference
$ohterName = "Doe";
echo $name . PHP_EOL;

function increment(int &$value)     // pass by reference
{
    $value++;   
}
$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

function &getValue()        // Returning Reference
{
    static $value = 100;
    return $value;
}
$a = &getValue();
$a = 200;
$b = &getValue();
echo $b . PHP_EOL;  // 200

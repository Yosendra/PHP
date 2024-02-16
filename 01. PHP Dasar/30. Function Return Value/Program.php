<?php
/* 

Kita dapat membuat function yang mengembalikan nilai.
Di dalam blok function, gunakan keyword "return" untuk mengembalikan nilai.
Kita hanya bisa mengembalikan 1 data di sebuah function, tidak bisa lebih dari 1. 

Return Type Declaration
Kita dapat menentukan tipe data apa yang akan dikembalikan oleh suatu function.
Untuk membuat Return Type Declaration, setelah tanda kurung ,kita dapat tambahkan tanda titik dua (:) diikuti tipe data kembaliannya

*/

function sum(int $a, int $b) {
    return $a + $b;             // mengembalikan nilai
}
$total = sum(10, 10);
var_dump($total);

function multiply(int $a, int $b): int        // kita menentukan int sebagai tipe kembalian dari function multiply
{
    return $a * $b;
}
$result = multiply(2, 3);
var_dump($result);

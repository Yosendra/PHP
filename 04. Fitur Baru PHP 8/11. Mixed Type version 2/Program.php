<?php
/*

Mixed Type version 2
Di PHP 7 terdapat type data mixed. Tipe data ini digunakan ketika sebuah parameter atau return type function
mengembalikan data yang bisa berbeda-beda.
Karena tidak bisa menyebutkan tipe data berbeda-beda di PHP 7, maka biasanya ditambahkanlah tipe data baru bernama 'mixed'.
Di PHP 8 tipe data mixed diperbarui karena di PHP 8 sudah ada Union Type. Jadi sekarang tipe data mixed adalah singkatan
dari tipe data "array|bool|callable|int|float|null|object|resource|string"
Detail: https://wiki.php.net/rfc/mixed_type_v2

*/

function testMixed(mixed $param): mixed                 # 'mixed' menjadi keyword untuk mangacu semua tipe data
{
    if (is_array($param))
        return [];
    else if (is_string($param))
        return "John";
    else if (is_numeric($param))
        return 1;
    else 
        return null;
}

var_dump(testMixed([]));
var_dump(testMixed(""));
var_dump(testMixed(1));
var_dump(testMixed(true));
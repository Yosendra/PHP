<?php
/*

Union Types
PHP adalah bahasa pemrograman yang dynamic.
Kita tahu sebenarnya saat membuat variabel, parameter, return value, sebenarnya di PHP kita tidak wajib
menyebutkan tipe datanya, dan PHP bisa berubah-ubah tipe data.
Saat kita tambahkan tipe data, maka secara otomatis PHP akan memastikan tipe data tersebut harus 
sesuai dengan tipe data yang sudah kita definisikan.
Di PHP 8, ada fitur Union Types, dimana kita bisa menambahkan lebih dari satu tipe data ke property,
argument, parameter, atau return value.
Penggunaan Union Type bisa menggunakan tanda | diikuti dengan tipe data selanjutnya.
More detail: https://wiki.php.net/rfc/union_types_v2

*/

class Example
{
    public string|int|bool|array $data;             # Union Type di property
}

$example = new Example();
$example->data = "John";        # string
$example->data = 1;             # int
$example->data = true;          # bool
$example->data = [];            # array

function sampleFunction(string|array $data): string|array   # Union Type di parameter dan return type
{
    if (is_string($data))
        return "String";
    
    if (is_array($data))
        return ["Array"];

    return "Empty";
}

$string = sampleFunction("John");         # function mampu menerima data string dan array
$array = sampleFunction(["John"]);

var_dump($string);                        # kembalian string
var_dump($array);                         # kembalian array


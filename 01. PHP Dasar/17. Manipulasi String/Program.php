<?php
/* 

Dot Operator
Dot operator (.) adalah operator yang digunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lain)

Konversi dari tipe string ke tipe number atau sebaliknya
Menggunakan tanda kurung di depan nilai yang ingin dikonversi

Mengakses karakter dalam string dengan kurung siku seperti mengakses elemen array.
Jika kita mengakses index melebihi karakter string, maka akan terjadi error.

Variable parsing. Khusus untuk string double quote dan heredoc, kita bisa menggunakan karakter $ untuk mengakses variable.

Curly Brace, untuk menggabungkan variable dengan string tanpa ada spasi

*/

$firstName = "John ";
$lastName = "Doe";
var_dump($firstName . $lastName);           // Dot Operator

$valueString = (string)100;                 // Konversi number ke string
var_dump($valueString);

$valueInt = (int)"100";                     // Konversi string ke integer
var_dump($valueInt);

$valueFloat = (float)"100.11";              // Konversi string ke floating point
var_dump($valueFloat);

$string = "STRING";                         // Mengakses karakter dalam string
var_dump($string[2]);

$name = "John";
echo "Hello $name, Selamat datang dan seleamat belajar!" . PHP_EOL;     // Variable parsing di string

$fruit = "Apple";
echo "There are three {$fruit}s in the fridge." . PHP_EOL;              // Curly Brace


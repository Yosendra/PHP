<?php
/* 

Variable Scope
• Global
• Local 
• Static

Global Scope
Variable yang dibuat di luar function memiliki global scope
Variable di scope global hanya bisa diakses dari luar function
Artinya di dalam function, kita tidak bisa mengakses vairable di global scope

Local Scope 
Variable yang dibuat di dalam funciton memiliki scope lokal
Variable di scope local hanya bisa diakses dari dalam function itu sendiri
Artinya variable tesebut tidak bisa diakses dari luar function ataupun dari function luar

global Keyword
Kita bisa mengakses variable di luar function (global scope) dari dalam function dengan keyword "global"

$GLOBALS Variable
Setiap variable yang dibuat di global scope secara otomatis akan di simpan di dalam array $GLOBAL oleh PHP
Kita bisa menggunakan $GLOBALS variable dengan key nama variablenya dari dalam function jika ingin mengakses variable global
$GLOBALS adalah variable yang bersifat super global, artinya bia diakses dari scope manapun.

Static Scope
Secara default local variable memiliki siklus hidup sebatas functionnya dieksekusi
Jika function selesai dieksekusi, maka siklus hidup local variablenya selesai
PHP memiliki scope yang bernama static. Static scope hanya bisa di set ke local variable
Saat local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
Artinya ketika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya

*/

$name = "John";             // Global Scope
$age = 35;
function sayName()
{
    $name = "Doe";          // Local Scope
    global $age;            // Akses global scope variable $age dengan keyword "global"

    echo $name . PHP_EOL;
    echo $age . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL;        // Akses global variable dari array $GLOBAL
    echo $GLOBALS["age"] . PHP_EOL;         // Akses global variable dari array $GLOBAL
    // var_dump($GLOBALS);
}
sayName();


function increment()
{
    static $counter = 1;                    // Set $counter sebagai static variable
    echo "Counter : $counter" . PHP_EOL;
    $counter++;
}
increment();    // Output: 1
increment();    // Output: 2
increment();    // Output: 3

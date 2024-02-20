<?php
/*

Magic Function
Magic Function adalah function-function yang sudah ditentukan kegunaanya di PHP.
Biasanya ditandai dengan underscore-underscore (__) pada prefix namanya. 
Kita tidak bisa membuat function tersebut kecuali memang sudah ditentukan kegunaannya.
Beberapa magic function yang sudah digunakan seperti __construct() sebagai konstruktor,
__desctruct() sebagai destruktor, dan __clone() sebagai object cloning.
Lengkapnya dapat di lihat di sini: https://www.php.net/manual/en/language.oop5.magic.php

__toString() Function
Digunakan untuk menentukan representasi string dari sebuah object.
Jika ingin membuat string dari suatu object, definisikan method __toString()-nya

__invoke() Function
Function ini yang akan dieksekusi ketika object yang dibuat dianggap sebagai function.
Misal ketika membuat object $student, lalu melakukan $student(), maka secara otomatis
function __invoke() yang akan dieksekusi.

Look at:
• Student.php

*/

require_once __DIR__ . "/Data/Student.php";

$student1 = new Student();
$student1->id = 1;
$student1->name = "John";
$student1->age = 18;

echo $student1 . PHP_EOL;           # object $student mereturn value string yang didapat dari method __toString()

$student1(1,2,3,4,5);               # menjalan function __invoke()
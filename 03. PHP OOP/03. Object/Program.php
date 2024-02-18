<?php
/*

Object adalah hasil instansiasi dari sebuah class.
Gunakan keyword "new" diikuti nama class dan tanda kurung ().

Look at:
• Person.php
• Program.php

*/

require_once __DIR__ . "/Data/Person.php";  // import file yang memuat kelas Person


$person1 = new Person();     // membuat object dari kelas Person
$person2 = new Person();     // dapat dilakukan sebanyak apapun menggunakan
$person3 = new Person();     // kelas yang sama

var_dump($person1);
<?php
/*

Trait Inheritance
Trait bisa menggunakan trait lain, mirip seperti interface yang bisa mewarisi interface lain.
Untuk penggunaan trait lain dari trait, penggunaannya sama seperti dengan penggunaan trait di class.

Look at:
• All.php
• Person.php

*/

require_once __DIR__ . "/Data/Person.php";

$person = new Person();
$person->name = "John";         # semua property dan method dari trait All dapat digunakan
$person->run();                 
$person->hello();               
$person->goodBye();

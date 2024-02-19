<?php
/*

this Keyword
Saat membuat kode di dalam function di dalam class, kata kunci this digunakan untuk mengakses
object saat ini.

Look at:
• Person.php

*/

require_once __DIR__ . "/Data/Person.php";

$person = new Person();
$person->name = "Jack";

$person->sayHello("Alex");
$person->sayHello(null);

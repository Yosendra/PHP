<?php
/*

Trait
Di PHP terdapat fitur yang namanya Trait.
Trait adalah extension, yang berarti kita bisa menambahkan konkrit function ke dalam suatu class.
Trait bisa ditambahkan ke dalam kelas lebih dari satu trait.
Trait digunakan untuk menyimpan function-function yang bisa digunakan ulang di beberapa class.
Untuk menggunakan trait di class, gunakan keyword 'use'.

Menggunakan Trait
class Person
{
    use SayGoodBye, SayHello;
}

Trait Properties
Berbeda dengan interface, di trait kita bisa menambahkan properties.
Secara otomatis class yang menggunakan trait tersebut akan meiliki properties yang ada di dalam trait.

Look at:
• SayGoodBye.php
• SayHello.php
• HasName.php
• Person.php

*/

require_once __DIR__ . "/Data/Person.php";

$person = new Person();
$person->hello();                   # gunakan function hello dari Trait
$person->goodBye();                 # gunakan function goodBye dari Trait

$person->name = "John";             # property 'name' dari Trait 
echo $person->name . PHP_EOL;
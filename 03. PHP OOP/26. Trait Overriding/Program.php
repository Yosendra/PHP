<?php
/*

Trait Abstract Function
Selain konkrit function, di trait juga kita bisa menambahkan abstract function.
Jika terdapat abstract function di trait, maka otomatis function tersebut harus dioverride
di class yang menggunakan trait tersebut.

Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait,
maka secara otomatis trait akan mengoverride function tersebut.
Namun jika kita membuat function yang sama di classnya, maka secara otomatis kita akan
mengoverride function di trait.
Sehingga posisinya seperti ini: ParentClass ---- override by -> Trait ---- override by -> ChildClass

Trait Visibility Override
Selain melakukan override function di class, kita juga bisa melakukan override visibility function
yang terdapa di trait.
Untuk melakukan ini tidak perlu membuat function baru di class, kita bisa gunakan secara
sederhana ketika menggunakan traitnya.
class Person
{
    use SayHello, SayGoodBye, HasName, CanRun {
        hello as private;
        goodBye as private;
    }
}

Look at:
• CanRun.php
• Person.php

*/

require_once __DIR__ . "/Data/Person.php";

$person = new Person();
$person->name = "John";
$person->run();                 # invoke hasil override dari abstract method run
$person->hello();               # invoke hasil override
$person->goodBye();
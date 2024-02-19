<?php
/*

Polymorphism
Polymorphism berarti banyak bentuk.
Dalam OOP, Polymorphism adalah kemampuan sebuah object berubah menjadi bentuk lain.
Polymorphism erat hubungannya dengan inheritance.

Look at:
• Programmer.php

*/

require_once __DIR__ . "/Data/Programmer.php";

$company1 = new Company();
$company2 = new Company();
$company3 = new Company();

# property programmer dari company bertipe "Programmer"
# namun kita bisa mengisinya dengan object dari child class milik Programmer
# yaitu 'BackendProgrammer' atau 'FrontendProgrammer'
$company1->programmer = new Programmer("John");
$company2->programmer = new BackendProgrammer("Alex");
$company3->programmer = new FrontendProgrammer("Suzan");

# sayHello mampu menerima objek dari Programmer dan turunannya sebagai argumen
sayHello(new Programmer("John"));
sayHello(new BackendProgrammer("Alex"));
sayHello(new FrontendProgrammer("Suzan"));
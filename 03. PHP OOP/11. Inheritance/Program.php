<?php
/*

Inheritance
Inheritance atau pewarisan adalah kemampuan untuk menurunkan sebuah class ke class lain.
Relasi antar dua class adalah Parent-Child.
Child class hanya bisa punya satu Parent class, namun satu Parent class bisa punya banyak Child class.
Saat sebuah class diturunkan, maka semua properties dan method yang ada di dalam Parent class,
secara otomatis akan dimiliki juga oleh Child class.
Gunakan keyword 'extends' untuk melakukan inheritance. 

Look at:
• Manager.php
• ViceManager.php

*/

require_once __DIR__ . "/Data/Manager.php";
require_once __DIR__ . "/Data/ViceManager.php";

$manager = new Manager();
$manager->name = "Manager";
$manager->sayHello("ViceManager");

$manager = new ViceManager();
$manager->name = "ViceManager";     # property dari kelas Manager
$manager->sayHello("Manager");      # method dari kelas Manager
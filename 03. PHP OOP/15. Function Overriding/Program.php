<?php
/*

Function Overriding
Function overriding adalah kemampuan mendeklarasikan ulang function di child class yang
sudah ada di parent class.
Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object
dari child class, function yang di class parent tidak bisa diakses lagi.

Look at:
• Manager.php
• ViceManager.php

*/

require_once __DIR__ . "/Data/Manager.php";
require_once __DIR__ . "/Data/ViceManager.php";

$manager = new Manager();
$manager->name = "John";
$manager->sayHello("Doe");          // sayHello dari dirinya sendiri

$viceManager = new ViceManager();
$viceManager->name = "Doe";
$viceManager->sayHello("John");     // sayHello hasil override sayHello parent
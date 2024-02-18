<?php
/*

Constructor Overriding
Constructor dapat dideklarasikan ulang di child class.
Di PHP kita bisa mengoverride function dengan argument yang berbeda namun tidak disarankan.
Jika kita melakukan override function dengan argument berbeda, maka PHP akan menampilkan warning.
Namun berbeda dengan constructor overriding, kita boleh mengoverride dengan mengubah argumentnya,
tapi direkomendasikan untuk memanggil parent constructornya.

Look at:
• Manager.php
• ViceManager.php

*/

require_once __DIR__ . "/Data/Manager.php";
require_once __DIR__ . "/Data/ViceManager.php";

$manager = new Manager();
$manager->name = "John";
$manager->sayHello("Doe");

$viceManager = new ViceManager();
$viceManager->name = "Doe";
$viceManager->sayHello("John");
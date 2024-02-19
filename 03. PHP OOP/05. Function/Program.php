<?php
/*

Function (Method)
Selain menambahkan properties, kita bisa juga menambahkan method ke object
dengan cara mendeklarasikan function di dalam blok class.
Untuk mengakses method dari object, gunakan tanda "->" diikuti nama functionnya
sama seperti mengakses property.

Look at:
• Person.php

*/

require_once __DIR__ . "/Data/Person.php";

$person = new Person();
$person->sayHello("Alex");      # mengakses method dari object

<?php
/*

Constructor
Constructor adalah function yang akan dipanggil saat pertama kali object dibuat.
Nama constructor di PHP haruslah __construct()

Look at:
• Person.php

*/

require_once __DIR__ . "/Data/Person.php";


$person = new Person("John", "America");     // berikan constructor argument saat membuat object
$person->sayHello();

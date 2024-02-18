<?php
/*

use Keyword
Sebelumnya setiap kali ketika menggunakan kelas yang ada di dalam namespace,
kita perlu menyebutkan nama namespacenya di awal.
Kita bisa meringkasnya dengan cara mengimport class yang ada id dalam namespace
dengan keyword 'use'

Alias
Alias adalah kemampuan membuat nama lain dari kelas, function, atau constant yang ingin diimport.
Gunakan keyword 'as' diikuti nama alias saat mengimport dengan use.

Group use Declaration
Kadang kita perlu melakukan import banyak hal di satu namespace yang sama.
PHP memiliki fitur group use dimana kita bisa import beberapa class, function, atau constant
dalam satu perintah use.
Untuk melakukan itu, kita bisa menggunakan tanda kurung kurawal ({})

Look at:
• Program.php

*/

require_once __DIR__ . "/Conflict.php";
require_once __DIR__ . "/Helper.php";

use const Helper\APPLICATION;                   // import constant
use function Helper\helpMe;                     // import function
use One\Conflict;                               // import class
use Two\Conflict as Conflict2;
use function Three\{func_A, func_B, func_C};    // Group use untuk function
use const Three\{CONST_A, CONST_B, CONST_C};    // Group use untuk constant
use Three\{ClassA, ClassB, ClassC};             // Group use untuk class

// $conflict1 = new One\Conflict();         // Sebelum menggunakan 'use'
// $conflict2 = new Two\Conflict();
$conflict1 = new Conflict();
$conflict2 = new Conflict2();               // menggunakan nama alias

// Helper\helpMe();                         // Sebelum menggunakan 'use'
// echo Helper\APPLICATION;
helpMe();
echo APPLICATION;

func_A();
echo CONST_A . PHP_EOL;
$a = new ClassA();

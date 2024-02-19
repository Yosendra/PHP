<?php
/*

Constant
Properties di class nilainya bisa berubah (mutable).
Kita dapat membuatnya menjadi constant (tidak dpt berubah, immutable).
Sebelumnya kita depat mendefinisikan constant dengan function "define()"
Sejak PHP 7.4 kita bisa menggunakan keyword "const" untuk membuat constant.
Pendefinisiannya mirip seperti variable namun kali ini tidak menggunakan karakter $.

Cara mengakses constant yang ada di dalam class dengan menggunakan tanda titik dua (:)
sebanyak dua kali di belakang nama class, kemudian diikuti nama constantnya

Look at:
• Constant.php
• Person.php
• Program.php

*/

require_once __DIR__ . "/Data/Person.php";

echo Person::AUTHOR . PHP_EOL;          # mengakses constant di dalam class

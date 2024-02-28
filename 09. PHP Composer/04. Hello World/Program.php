<?php
/*

Hello World
Composer secara otomatis akan menyimpan semua library yang kita gunakan di direktori vendor.
Lantas bagaimana cara include/require file librarynya?
Kita tidak perlu melakukan satu per satu, kita cukup menggunakan file /vendor/autoload.php 
yang sudah secara otomatis digenerate oleh composer.
File autoload.php tersebut bisa secara otomatis meng-include class-class yang kita butuhkan di library.
Jadi di file PHP kita, cukup hanya menambahkan autoload.php saja.

*/

require_once __DIR__ . "/vendor/autoload.php";      # cukup meng-include kan file ini saja

echo "Hello World" . PHP_EOL;
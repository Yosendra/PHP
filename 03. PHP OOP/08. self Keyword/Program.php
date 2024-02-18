<?php
/*

Properties vs Constant
• Saat membuat object, properties yang ada di calss akan secara otomatis dibuat untuk
masing-masing object. Oleh karena itu untuk mengakses properties, kita perlu menggunakan
object, atau jika dari dalam object tersebut sendiri, kita perlu menggunakan keyword this
• Untuk constant, ia tidak akan dibuat per object. Constant hidupnya di class, bukan di object.
Oleh karena itu mengaksesnya perlu menggunakan operator :: (NamaClass::NAMA_CONSTANT).
• Secara sederhana properties satu per instance class (object), sedangkan constant dibuat 
satu per class.

self Keyword
• Jika di dalam class (misal function) kita ingin mengakses constant, kita perlu menggunakan
operator ::
• Namun jika di dalam class yang sama, gunakan keyword self untuk mempermudah.

Look at:
• Person.php
• Program.php

*/

require_once __DIR__ . "/Data/Person.php";


$person = new Person();
$person->info();
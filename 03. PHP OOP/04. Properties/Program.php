<?php
/*

Properties
Fields/Properties/Attributes adalah datay yang bisa disisipkan di dalam Object.
Field ditempatkan di dalam blok class, namun diawali dengan keyword "var".

Manipulasi Properties
Properties dapat dimanipulasi nilainya.
Untuk mengakses properties, gunakan keyword "->" setelah nama object kemudian
diikuti nama propertiesnya.

Properties Type Declaration
Dengan type declaration di properties, kita tidak bisa sembarang mengisi nilai pada properties
dengan sembarang tipe data. Harus sesuai dengan tipe data yang dideklarasikan.
PHP masih memilki fitur type juggling, ia akan mengkonversi tipe data yang masih bisa ditolerir oleh PHP.
Untuk menambahkan type declaration, tambahkan tipe data setelah kata kunci var di properties.

Default Properties Value
Menginisialisasi langsung property dengan nilai tertentu saat pendefinisian property.
Seperti default value, jika tidak diubah melalui object, property akan memiliki value tersebut.

Nullable Properties
Saat menambahkan type declaration properties atau di function argument, secara otomatis
tidak bisa mengirim data "null" ke dalam properties atau function argument.
PHP 7.4 mengenalkan nullable type, kita dapat mengirim null ke properties atau function argument.
Gunakan tanda tanya (?) sebelum type declaration untuk menggunakan nullable type.

Look at:
• Person.php
• Program.php

*/

require_once __DIR__ . "/Data/Person.php";


$person = new Person();

// manipulasi properties
$person->name = "John";             
$person->address = "New York";
//$person->country = "America";     // komen statement ini untuk gunakan property default value

// cetak nilai dari hasil manipulasi properties
echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;          // cetak "Indoenesia" dari property default value

//$person->name = [];     // Ini akan error. Tipe data dari property yang diisi meminta "string", bukan "array"

var_dump($person);
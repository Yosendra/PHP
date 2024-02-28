<?php
/*

Autoload
Composer menggunakan fitur PHP Class Autoload untuk load class yang terdapat di directory vendor.
Detail: https://www.php.net/manual/en/language.oop5.autoload.php
Selain kita juga bisa memasukan source code di project kita ke autoload agar kita tidak perlu 
melakukan include satu persatu file PHP class nya.
Namun agar bisa autoload, ada standar yang perlu kita ikuti.

Tambahkan standar autoload di composer.json
"autoload": {
    "psr-4": {
        "BelajarComposer\\": "src/"
    }
},

"psr-4" adalah standar yang umum digunakan, 
"BelajarComposer\\" adalah namespace dari project kita, 
"src/" adalah direktori kita menempatkan file PHP yang akan diinclude oleh autoload.php

composer dump-autoload
Setelah menambahkan autoload, kita perlu generate ulang file autoload.php
dengan perintah: composer dump-autoload

Aturan Pembuatan Source Code
Pada composer.json sebelumnya kita sudah menggunakan namespace BelajarComposer di direktori src.
Artinya jika kita import class di namespace BelajarComposer, nama dia akan include file di direktori src.
Jika namespacenya BelajarComposer, maka foldernya adalah src, jika namespacenya BelajarComposer\Data, maka foldernya
adalah src/Data
Sedangkan untuk nama file harus sama dengan nama class. Jika nama class adalah "People", maka nama file harus "People.php"

Look at:
• People.php

*/

require_once __DIR__ . "/vendor/autoload.php";

use BelajarComposer\Data\People;    # tidak perlu require_once untuk file People.php, langsung import saja kelasnya dengan use

$people = new People("John");
echo $people->sayHello("Doe");
<?php
/*

Namespace
• Saat kita membuat aplikasi, bisa dipastikan akan banyak sekali membuat kelas.
Jika kelas terlalu banyak, terkadang akan menyulitkan untuk mencari atau mengklasifikasikan
jenis-jenis kelas.
• PHP memiliki fitur yang namanya 'namespace', dimana kita bisa menyimpan class-class kita di dalam namespace.
Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu 
menyebutkan nama namespacenya.
• Namespace bagus ketika kita punya beberapa class yang sama. Dengan menggunakan namespace, nama class
sama tidak akan menjadikan error di PHP ketika kita menempatkan dua kelas yang sama tersebut di namespace 
yang terpisah.

Function & Constant di Namespace
Selain kelas, kita bisa mendefinisikan function dan constant di dalam namespace.

Global Namespace
Secara default saat kita membuat kode PHP sebenarnya itu disimpan di global namespace.
Global namespace adalah namespace yang tidak memiliki nama namespace.
namespace {
    echo "Hello Global Namespace" . PHP_EOL;
}

Look at:
• Conflict.php
• Helper.php

*/

require_once __DIR__ . "/Conflict.php";
require_once __DIR__ . "/Helper.php";


// mengakses dua kelas yang punya nama sama pada namespace yang berbeda
$conflict1 = new One\Conflict();    // [nama_namespace]\[nama_kelas]
$conflict2 = new Two\Conflict();

Helper\helpMe();            // mengakses function dalam namespace Helper
echo Helper\APPLICATION;    // mengakses constant dalam namespace Helper

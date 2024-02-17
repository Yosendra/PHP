<?php
/* 

Saat membuat aplikasi, sebaiknya tidak dibuat dalam satu file.
Lebih baik dipecah ke beberapa file agar kode program tidak menumpuk di satu file.
"require" dan "include" digunakan untuk mengambil file php lain.
Untuk require, jika file yang diambil tidak ada, maka terjadi error dan program terhenti.
Untuk include, jike file yang diambil tidak ada, maka akan memberi peringatan, namun program tetap dilanjutkan.

Kode program PHP dibaca dari atas ke bawah, oleh karena itu pastikan posisi include dan require berada di atas sebelum
kita menggunakan isi yang ada di dalamnya. Jangan sampai kita menggunakan fungsi yang belum ada definisinya.

Function require dan include akan selalu mengambil file yang diinginkan.
Jika beberapa kali menggunakan require dan include file yang sama, maka file tersebut akan berkali-kali pula diambil.
Ini akan menjadi masalah jika dalam satu file terdapat definisi function, sehingga akan terjadi error redeclare function.
require_once dan include_once menjadi solusi akan hal ini. Dua function ini mendeteksi jika sebelumnya pernah
mengambil file yang sama, maka tidak akan diambil lagi.

*/

include "MyFunctionInclude.php";           // mengambil file php dengan nama MyFunctionInclude.php dengan include
echo sayHello("John", "Doe");              // gunakan function yang sudah didefinisikan di dalam MyFunctionInclude.php

require "MyFunctionRequire.php";           // mengambil file php dengan nama MyFunctionRequire.php dengan require
echo sayGoodBye("John", "Doe");            // gunakan function yang sudah didefinisikan di dalam MyFunctionRequire.php

include_once "MyFunctionInclude.php";      // tidak akan mengambil file karena telah diambil sebelumnya
require_once "MyFunctionRequire.php";      // tidak akan mengambil file karena telah diambil sebelumnya
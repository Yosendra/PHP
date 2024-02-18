<?php
/*

Type Check dan Casts
Sebelumnya kita sudah tau cara melakukan konversi tipe data bukan class.
Khusus untuk tipe data object, kita tidak perlu melakukan konversi secara eksplisit.
Namun agar aman, sebelum melakukan cast, pastikan kita melakukan type check (pengecekan tipe data)
dengan menggunakan keyword 'instanceof'
Hasil dari operator instanceof adalah boolean, true jika tipe data sesuai, false jika tidak sesuai.

Look at:
• Programmer.php

*/

require_once __DIR__ . "/Data/Programmer.php";

sayHello(new Programmer("John"));
sayHello(new BackendProgrammer("Alex"));
sayHello(new FrontendProgrammer("Suzan"));
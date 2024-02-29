<?php
/*

Fixture
Salah satu yang memakan waktu saat membuat unit test adalah membuat kode awal yang berulang-ulang sebelum unit test.
Atau membuat kode akhir yang berulang-ulang setelah unit test.
Hal ini dinamakan fixture.
Pada unit test sebelumnya yang sudah dibuat, kita sering membuat object $counter atau $person.
Dengan menggunakan fitur fixture milik PHPUnit, hal ini bisa dipermudah.

setUp() Function
Cass TestCase memiliki sebuah function bernama setUp()
Function setUp() merupakan function yang akan selalu dipanggil sebelum function unit test dijalankan.
Function setUp() cocok sekali untuk membuat kode yang kita inginkan sebelum unit test dijalankan.

Annotation @before
Jika kita ingin membuat function dengan nama berbeda, kita bisa menggunakan annotation @before
Bahkan jika menggunakan annotation @before, ita bisa membuat function setup lebih dari satu

Perhatikan
Function fixture akan dieksekusi setiap kali method unit test dieksekusi.
Artinya jika terdapat 10 function unit test, maka function fixture juga akan dipanggil 10 kali.

tearDown() function
Kelas TestCase memiliki sebuah function bernama tearDown()
Fungsi tearDown() merupakan fungsi yang akan selalu dipanggil setelah function unit test dieksekusi.
Fungsi ini cocok digunakan untuk membuat kode yang kita inginkan setelah unit test dijalankan.
Selain menggunakan tearDown(), kita bisa menggunakan anotasi @after

Look at:
• Person.php
• PersonTest.php

*/
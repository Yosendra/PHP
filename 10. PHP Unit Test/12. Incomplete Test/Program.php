<?php
/*

Incomplete Test
Saat membuat unit test kadang kita membuat test dengan dimulai dengan function kosong, lalu mulai diisi dengan kode unit test.
Kada ada kalanya unit test belum selesai.
Secara default jika tidak terdapat masalah pada unit test, maka PHPUnit akan menganggap uniter tersebut sebagai unit test yang sukses.
Dan kadang jika lupa, bisa jadi kita tidak pernah tahu kalo ternyata ada unit test yang belum selesai karena terlihat sukses.
Untuk kasus seperti ini ada baiknya kita memberi tahu ke PHPUnit bahwa unit test tersebut belum selesai dengan menggunakan
method Assert::markTestIncomplete()

Peringatan
Menggunakan function markTestIncomplete() akan menghasilkan error IncompleteTestError.
Oleh karena itu statement di bawahnya tidak akan dieksekusi.

Look at:
• CounterTest.php

*/
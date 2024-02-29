<?php
/*

Test Exception
Saat membuat unit test pastikan kita tidak hanya membuat unit test dengan skenario benar saja.
Kita juga wajib membuat unit test dengan skenario salah atau gagal.
Salah satunya kadang saat terjadi skenario gagal, kita sering menggunakan Exception.
PHPUnit memiliki fitur assertion untuk memastikan bahwa sebuah Exception harus terjadi.
Jika terjadi, maka unit test dianggap gagal.
Kita bisa menggunakan function Assert::expectException() jika ingin memastikan bahwa sebuah unit test harus tejadi exception yang kita perkirakan.

Look at:
• Person.php
• PersonTest.php

*/
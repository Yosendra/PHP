<?php
/*

Data Provider
Dalam membuat unit test, sering terdapat kasus dimana kita ingin mengkombinasikan beberapa input data.
Sebenarnya hal ini dapat dilakukan secara manual satu persatu.
Hanya saja akan terlalu banyak hal yang harus kita tulis.
PHPUnit mendukung fitur data provider dimana kita bisa membuat unit test dengan parameter, dan datanya di provider dari function lain.
Untuk melakukan ini kita bisa menggunakan annotation @dataProvider providerFunction

@testWith
Saat menggunakan @dataProvider kita harus membuat function yang mengembalikan data.
Ada cara lebih mudah tanpa harus membuat function terlebih dahulu, yaitu menggunakan annotation @testWith
Dengan menggunakan @testWith kita bisa mengirim data ke unit test tanpa harus membuat function, kita cukup masukan dalam doc saja



Look at:
• Math.php
• MathTest.php

*/
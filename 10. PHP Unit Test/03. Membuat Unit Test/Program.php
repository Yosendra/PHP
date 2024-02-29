<?php
/*

Setup Autoload
Sebelum kita mulai belajar membuat unit test menggunakan PHPUnit.
Biasakan membedakan lokasi tempat source code PHP kita dan juga source code unit test.
Bisanya rata-rata programmer PHP akan membuat folder test untuk menyimpan semua unit testnya.
Agar tidak perlu melakukan use namespace lagi, kita bisa menggunakan namespace yang sama untuk folder source code dan folder unit test.

"autoload": {
    "psr-4": {
        "BelajarPHPUnit\\": "src"
    }
},
"autoload-dev": {
    "psr-4": {
        "BelajarPHPUnit\\": "test"
    }
},

Input perintah "composer dump-autoload", setelah update composer.json

Membuat Unit Test
Untuk membuat unit test, kita bisa membuat class turunan dari PHPUnit\Framework\TestCase
Biasanya pembuatan unit test mengikuti class yang akan kita test.
Misal jika kita punya class Person, maka unit testnya kita akan membuat class PersonTest.
Dan untuk skenario unit testnya, kita akan simpan dalam public function dengan prefix test*
Misal testCreate(), testUpdate(), dll. Atau jika tidak menggunakan aturan awalan test*, 
kita juga bisa menambahkan @test pada function yang akan kita gunakan sebagai unit test.

Menjalankan Unit Test
Setelah kita membuat unit test, kita bisa menjalankan unit test tersebut menggunakan binary file PHPUnit bernama phpunit di vendor/bin.
Caranya gunakan perintah: vendor/bin/phpunit test/CounterTest.php

Menjalankan Unit Test Per Method
Kadang ada kebutuhan kita hanya perlu menjalankan unit test hanya method tertentu saja.
Untuk melakukan itu, kita bisa menggunakan perintah: vendor/bin/phpunit --filter 'ClassTest::testMethod' test/ClassTest.php
Contoh: vendor/bin/phpunit --filter 'CounterTest::testCounter' test/CounterTest.php

Look at:
• composer.json
• Counter.php
• CounterTest.php

*/
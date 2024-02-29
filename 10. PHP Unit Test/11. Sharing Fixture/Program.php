<?php
/*

Independent Unit Test
Secara default class unit test sebenarnya akan selalu dibuat dalam function unit test dijalankan.
Jadi tidak menggunakan object unit test yang sama.
Cara berjalan unit test:
1. Membuat object unit test
2. Menjalankan fixture setUp
3. Menjalankan function unit test
4. Menjalankan fixture tearDown
5. Ulang ke yang pertama untuk eksekusi function unit test selanjutnya

Sharing Fixture
Karena object dari class unit test selalu dibuat ulang, maka akan sulit jika ingin membuat data yang bisa
disharing antar unit test, misal koneksi database.
Untuk itu kita bisa membuat datanya berupa variable static, sehingga variable static tersebut 
tidak perlu bergantung dengan object unit test lagi.

Fixture Class
Sekarang pertanyaannya, bagaiman cara menginisialisasi data static tersebut? karena kita tidak bisa menggunakan setUp()
method karena bukan static function.
Untungnya PHPUnit mendukung sharing fixture seperti ini, nama functionnya adalah:
static function setUpBeforeClass() untuk setup diawal ketika class unit test dieksekusi, atau menggunakan anotasi @beforeClass
static function tearDownAfterClass() untuk dipanggil diakhir ketika class unit test selesai dieksekusi, atau menggunakan anotasi @afterClass
Sharing fixture hanya dieksekusi sekali diawal dan diakhir, walaupun di class unit test terdapat banyak function unit test.

Look at:
• Counter.php
• CounterStaticTest.php

*/
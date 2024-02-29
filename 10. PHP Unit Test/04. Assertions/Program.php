<?php
/*

Assertions
Pada kode unit test sebelumnya terdapat peringatan yang menyebutkan bahwa unit test kita tidak memiliki assertion.
Assertion adalah mengecek apakah sebuah kondisi sudah terpenuhi. Jika kondisi tidak terpenuhi, maka unit test dianggap gagal.

Class Assert
Untuk melakukan assertion kita tidak perlu melakukan secara manual menggunakan if-else
kita bisa manfaatkan class yang sudah disediakan oleh PHPUnit bernama PHPUnit\Framework\Assert
Class Assert berisi static function yang banyak sekali dan bisa digunakan sesuai kebutuhan.
Saat kondisi pada assertion tidak terpenuhi, secara otomatis akan terjadi error, dan unit test akan dianggap gagal.
Detail: https://docs.phpunit.de/en/9.6/assertions.html

Assert di TestCase
Saat kita membuat class unit test, maka kita wajib membuat class turunan dari class TestCase.
Sedangkan kelas TestCase itu sendiri merupakan turunan dari class Assert.
Jadi secara tidak langsung kita bisa menggunakan function-function assertion langsung dari unit test menggunakan $this atau self.

Look at:
• CounterTest.php

*/
<?php
/*

Annotation
Secara default saat kita membuat function unit test, maka harus diawali dengan prefix test.
PHPUnit juga mendukung fitur annotation yaitu metadata atau informasi tambahan yang bisa dimasukan ke dalam source code
dimana di PHP annotation ditempatkan pada Doc Block (block komentar)
Ada banyak sekali annotation yang terdapat di PHPUnit.
Detail: https://docs.phpunit.de/en/9.6/annotations.html

@test
@test merupakan annotation yang digunakan untuk menandakan bahwa function ini adalah sebuah unit test.
Dengan menambahkan @test, kita tidak perlu lagi membuat nama function selalu diawali dengan kata test.

Look at:
• CounterTest.php

*/
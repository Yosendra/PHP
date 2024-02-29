<?php
/*

Skip Test
Kadang ada masalah ketika membuat unit test sehingga kita ingin men-disable unit test yang sudah ada.
Saat ingin men-disabled unit test kadang kita melakukan hal seperti mengubah nama function sehingga
tidak diawali dengan test atau menghapus @test jika menggunakan anotasi.
Hanya saja masalahnya jika itu kita lakukan, secara otomatis unit test akan hilang dari laporan
PHPUnit dan jika kita lupa, bisa saja unit test tersebut akan terdisabled selamanya.
Cara yang baik jika ada unit test yang memang ingin kita disable adalah dengan menggunakan Assert::markTestSkipped()
dimana nanti akan terdapat laporan dari PHPUnit bahwa unit test tersebut kita skip.

Peringatan
Menggunakan function markTestSkipped() akan menghasilkan error SkippedTestError
Oleh karena itu kode di bawahnya tidak akan dieksekusi

Skip Berdasarkan Kondisi
PHPUnit mendukung melakukan skip unit test berdasarkan kondisi tertentu.
Ada banyak kondisi yang bisa dicek, seperti versi php, sistem operasi, dan lainnya.
Untuk melakukan skip berdasarkan kondisi, kita bisa menggunakan anotasi @require diikuti tipe kondisi.
Beberapa kondisi mendukung operasi perbandingan.

Look at:
• CounterTest.php

*/
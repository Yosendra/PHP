<?php
/*

Permasalah Unit Test
Kadang membuat unit test untuk sebuah class bukanlah hal yang mudah, apalagi jika ternyata class tersebut
bergantung dengan object lain.
Apalagi jika ternyata object yang dibutuhkan ternyata tergantung dengan object lain lagi.
Hal seperti ini akan menyulitkan saat membuat unit test.
Sebagai contoh kita akan coba membuat studi kasus sederhana membuat class yang kompleks.

Stub
Saat membuat test untuk sebuah kelas dan ternyata kelas tersebut mempunyai dependency dengan kelas lain,
maka kita bisa membuat kelas pengganti yang bisa kita konfigurasi agar sesuai dengan keinginan kita.
Teknik ini dinamakan stubbing dan object pengganti yang kita buat disebut stub.
PHPUnit mendukung pembuatan object stub secara mudah hanya dengan menggunakan function createStub()
secara otomatis akan membuat object class atau interface yang kita inginkan dengan default implementation.

Konfigurasi Stub
Secara default, semua function di stub akan mengembalikan null jika nullable return type, atau default value
jika tipe data primitive, atau stub lain jika tipe data class.
Biasanya kita akan melakukan konfigurasi stub terlebih dahulu sebelum kita menggunakan stub.
Dengan begitu kita bisa memprediksi tingkah laku stub tersebut sesuai dengan konfigurasi yang kita buat.
Melakukan konfigurasi stub sederhananya hanya memberi tahu stub jika sebuah function di eksekusi, kita ingin
ia mengembalika data apa.

Invocation Stubber
Stub memiliki function yang bernama method(name), dimana dia akan mengembalikan InvocationStubber.
Dengan InvocationStubber kita bisa mengatur hasil kembalian dari function yang dipanggil di stub.
Detail: 

Integrasi dengan Stub
Sekarang kita sudah tahu cara menggunakan stub
Jika kita akan membuat unit test untuk sebuah class dan ternyata class tersebut membutuhkan object lain, 
maka disarankan untuk menggunakan stub.
Hal ini agar tingkah laku stub bisa kita konfigurasi sehingga perubahan yang terjadi di class asli stub nya tidak
mempengaruhi unit test kita.

Look at:
• Product.php
• IProductRepository.php
• ProductService.php
• ProductServiceTest.php

*/
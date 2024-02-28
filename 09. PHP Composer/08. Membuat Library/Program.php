<?php
/*

Membuat Library
Sekarang kita sudah tau bagaimana menggunakan composer di project aplikasi kita.
Lalu bagaimana jika ingin membuat library?
Library yang bisa digunakan di project kita atau project orang lain?
Composer tidak hanya mendukung pembuatan project, namun juga library.

Test:
1. Saat menjalankan perintah "composer init", pilih typenya "library"
2. Setelah selesai mengenerate perhatikan di composer.json, pada key "type" sekarang berniali "library"
3. Masukan perintah "composer update"
4. Masukan perintah "composer dump-autoload"

Ini untuk memastikan bahwa library mewajibkan pengguna menggunakan PHP versi 8 ke atas
"require": {
    "php": ">=8.0"
}

Look at:
• composer.json
• Customer.php

*/



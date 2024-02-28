<?php
/*

Script
Fitur ini digunakan untuk membuat custom script.
Dengan custom script, kita bisa menggunakan composer untuk membuat perintah misal: "composer script-saya"

"scripts": {
    "jalankan-server": "php -S localhost:8080",
    "hello": "echo 'Hello World'"
}

Test: saat di terminal, ketikan perintah "composer hello"

Vendor Binary
Terkadang library tidak hanya berisi kode PHP saja.
Library dapat juga berisi binary file yang dapat dieksekusi seperti saat menggunakan PHPUnit.
Fitur ini bernama Vendor Binary.
Detail: https://getcomposer.org/doc/articles/vendor-binaries.md

"bin": ["bin/file_binary", "bin/file_binary_lainnya"]

Look at:
• composer.json

*/
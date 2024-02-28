<?php
/*

Menambah Dependency
Salah satu keuntungan menggunakan composer adalah kita bisa dengan mudah menambahkan dependency library yang kita butuhkan.
Terdapat dua jenis library di composer, library yang digunakan ketika development, dan library yang digunakan ketika aplikasi berjalan.
Contoh library yang digunakan ketika development adalah unit test misalnya.
Untuk menambahkan library, kita bisa tambahkan di composer.json dengan attribute require (untuk library aplikasi)
dan require-dev (untuk library development)

Composer Dependency
{
    "require": {
        "library1" : "version",
        "library1" : "version"
    },
    "require-dev": {
        "library1" : "version",
        "library1" : "version"
    }
}

Versi Library
Saat menambahkan library, kita perlu menentukan versi berapa yang akan digunakan.
Ada beberapa cara menggunakan versi library di composer, semuanya tertulis di halaman resmi composer:
Detail: https://getcomposer.org/doc/articles/versions.md
Versi di composer mengikuti semantic versioning: https://semver.org/

Tambahan:
Open the php.ini file and uncomment ;extension=zip to extension=zip
Detail: https://stackoverflow.com/questions/75050370/the-zip-extension-and-unzip-7z-commands-are-both-missing-skipping-in-windows

Test: 
1. Tambahkan dependency Monolog di composer.json
2. Jalankan perintah "composer update"
3. Jalankan perintah "composer dump-autoload"

Look at:
• composer.json -> require

*/

require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Logging Composer");
$log->pushHandler(new StreamHandler(__DIR__ . "/application.log", Logger::INFO));

$log->info("Hello World");
$log->info("Selamat belajar composer");

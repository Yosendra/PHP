<?php
/*

Membuat Project Composer
Unutk membuat project composer cukup sederhana, buat file composer.json pada project PHP kita.
Kita bisa menambahkan file tersebut di project baru atau di project lama kita.
Jika ingin secara otomatis, masukan perintah: "composer init"

hasil generate menghasilkan composer.json:
{
    "name": "yosendra/belajar-php-composer",
    "description": "Belajar PHP Composer",
    "type": "project",
    "authors": [
        {
            "name": "Yosendra",
            "email": "yosendra.evri@gmail.com"
        }
    ],
    "require": {}
}

Menginstall Dependency
Setelah membuat project composer, selanjutnya kita perlu menginstall dependency.
Untuk menginstall dependency, kita bisa gunakan perintah: "composer update".
Perintah tersebut akan menginstall semua dependency yang terdapat di file composer.json,
semua dependency akan diupdate di file composer.lock
Hasil semua instalasi dependency akan disimpan di folder vendor.
Folder "vendor" bisa dicantumkan di file ".gitignore"

composer update  -> memperbarui composer.lock dengan yang dependency yang tertera di composer.json
composer install -> langsung membaca dari composer.lock dan melakukan install dependency berdasarkannya

*/
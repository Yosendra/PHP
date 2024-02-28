<?php
/*

Pengenalan PHP Unit Test
PHP tidak memiliki fitur untuk unit testing secara default.
Untuk mengimplementasikan unit testing, kita perlu library atau framework di PHP.
PHPUnit adalah salah satu framework untuk unit testing yang paling populer saat ini.
Banyak framework populer seperti Laravel menggunakan PHPUnit untuk unit testing-nya.
Detail: https://phpunit.de/

Composer
PHPUnit merupakan framework yang sudah terintegrasi baik dengan composer.
Oleh karena itu untuk menambahkan PHPUnit, kita wajib menggunakan project PHP yang menggunakan composer.
Library: https://packagist.org/packages/phpunit/phpunit

Menginstall PHPUnit
Untuk menginstall PHPUnit, kita bisa menambahkan dependency PHPUnit dibagian require-dev (karena PHPUnit hanya untuk development).
Setelah itu kita update dependencynya menggunakan composer update.
Decara default akan terdapat folder bin di dalam vendor yang berisi binary file PHPUnit yang bisa digunakan untuk menjalankan unit test.

Test: Tambahkan dependency phpunit di composer.json, kemudian "composer install", "composer dump-autoload"

Look at:
• composer.json

*/
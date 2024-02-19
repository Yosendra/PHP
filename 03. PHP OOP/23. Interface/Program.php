<?php
/*

Interface
Sebelumnya abstract class bisa digunakan sebagai kontrak untuk child classnya.
Namun lebih tepat menggunakan interface. Interface di pemrograman bukan User Interface.
Interface hanya berisikan signature method (semuanya abstract), dan tidak berisi implementasi.
Interface tidak boleh memilik properties / fields, namun constant diperbolehkan.
Untuk mewarisi interface, gunakan keyword "implements".
Pada class, diperbolehkan meng-implements lebih dari satu interface.

Look at:
• ICar.php
• Car.php

*/

require_once __DIR__ . "/Data/Avanza.php";
$car = new Avanza();
$car->drive();

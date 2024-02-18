<?php
/*

Destructor
Destructor adalah function yang akan dipanggil ketika object akan dihapus dari memory.
Biasanya ketika object tersebut sudah tidak lagi digunakan atau aplikasi akan mati.
Nama constructor di PHP haruslah __destruct().
Khusus untuk destructor, tidak boleh menambahkan function argument.
Dalam penggunaannya sehari-hari, cocok digunakan untuk menutup koneksi ke database atau menutup
proses menulis ke file sehingga tidak memory leak.

Look at:
• Person.php

*/

require_once __DIR__ . "/Data/Person.php";


$person = new Person("John", "America");

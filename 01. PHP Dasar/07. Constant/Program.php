<?php
/* 

Variable sifatnya mutable, yaitu dapat berubah-ubah.
Jika ingin immutable (tidak dapat berubah-ubah) maka gunakan Constant.
Constant adalah tempat untuk menyimpan data yang tidak bisa berubah lagi setelah di deklarasikan.
Untuk membuat constant, gunakan fungi define().
Untuk nama constant, best practicenya menggunakan UPPER_CASE.

*/

define("PI", 3.14);
echo PI;
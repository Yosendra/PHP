<?php
/*

PDO adalah singakatan dari PHP Data Object.
Yaitu sebuah spesifikasi interface untuk standard komunikasi antara PHP dengan database.
PDO adalah sebuah spesifikasi sehingga memperlukan implementasinya (driver) atau extension untuk mengaktifkan PDO.
PDO menyediakan abstraction layer yang sama untuk semua database, artinya mau menggunakan database apapun,
kita akan menggunakan kode PDO yang sama, dan cara kerja yang sama.
Hal ini membuat penggunaan PDO lebih flexible dibandingkan menggunakan function-function bawaan dari driver database.

Cara Kerja PDO
              call       call              call
Kode Program -----> PDO -----> PDO Driver -----> Database

Cek Driver PDO
1. jalankan function phpinfo()
2. cari kata "PDO drivers"

    PDO

    PDO support => enabled
    PDO drivers => mysql, sqlite

    pdo_mysql

    PDO Driver for MySQL => enabled
    Client API version => mysqlnd 8.2.12

    pdo_sqlite

    PDO Driver for SQLite 3.x => enabled
    SQLite Library => 3.39.2

Kita akan menggunakan driver dari MySQL
*/

phpinfo();
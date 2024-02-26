<?php
/*

Transaction di PDO
Secara default semua perintah SQL yang dikirim menggunakan PDO akan otomatis dicommit,
atau istilahnya auto-commit.
Namun kita bisa menggunakan fitur transaksi sehingga SQL yang kita kirim tidak secara otomatis
di commit ke database.
Untuk memulai transaksi, kita gunakan method beginTransaction() di objek PDO.
Untuk commit transaksi, kita gunakan method commit().
Untuk rollback, kita gunakan method rollback().

*/

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

# transaction sukses jika semuanya sukses
# dianggap gagal ketika salah satunya saja gagal
$connection->exec("INSERT INTO comments(email, comment) VALUES('john@mailinator.ocm', 'A')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('john@mailinator.ocm', 'B')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('john@mailinator.ocm', 'C')");

# perintah yang memicu gagal, data sebelumnya tidak akan masuk ke database
$connection->exec("INSERT INTO comments(comment) VALUES('john@mailinator.ocm', 'C')");

// $connection->commit();       # commit jika ingin memasukan data
$connection->rollBack();        # rollback jika ingin batal memasukan data

$connection = null;

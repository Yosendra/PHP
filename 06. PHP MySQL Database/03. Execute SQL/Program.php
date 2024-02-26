<?php
/*

Execute SQL
Setelah terkoneksi ke database, kita bisa mengirim perintah SQL ke database dari aplikasi PHP kita.
Untuk melakukan hal tersebut, gunakan method 'execute()' yand terdapat pada objek PDO.
'execute()' digunakan untuk semua jenis perintah SQL yang tidak membutuhkan result data
seperti CREATE TABLE, INSERT, UPDATE, DELETE, ALTER TABLE, dan lainnya.
Perintah SELECT adalah perintah yang mengembalikan result data.

---- Membuat table Customers ----
CREATE TABLE customers
(
    id      VARCHAR(100)    NOT NULL,
    name    VARCHAR(100)    NOT NULL,
    email   VARCHAR(100)    NOT NULL,
    PRIMARY KEY(id)
)
ENGINE = InnoDB;

Look at:
• GetConnection.php

*/

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

# Perintah SQL yang ingin dijalankan
# Masukan data dengna perintah INSERT
$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES("d1078a70-d4ea-11ee-8a16-08606e99c7bc", "John", "john@mailinator.com")
SQL;

# Eksekusi perintah sql melalui mehtod exec()
$connection->exec($sql);

# Tutup koneksi
$connection = null;

# Cek tabel customer dengan perintah SELECT untuk melihat data yang dimasukan
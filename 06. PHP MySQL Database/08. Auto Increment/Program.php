<?php
/*

Auto Increment
Kadang kita membuat sebuah tabel dengan id auto-increement.
Dan kadang pula kita ingin mengambil data id yang sudah kita insert ke dalam MySQL.
Sebenarnya kita bisa melakukan query ulang ke database menggunakan SELECT LAST_INSERT_ID().
Tetapi untungnya class PDO menyediakan fungsi 'lastInsertId()' yang digunakan untuk mendapatkan
id terakhir yang dibuat oleh auto-increment.

---- Membuat Tabel Comments ----
CREATE TABLE comments
(
    id               INT             NOT NULL    AUTO_INCREMENT,
    email            VARCHAR(100)    NOT NULL,
    comment          TEXT,
    PRIMARY KEY (id)
) 
ENGINE = InnoDB;

*/

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->exec("INSERT INTO comments(email, comment) VALUES('john@mailinator.ocm', 'Hi...')");

# dapatkan id auto-increment terakhir yang dimasukan
$id = $connection->lastInsertId();

var_dump($id);

$connection = null;

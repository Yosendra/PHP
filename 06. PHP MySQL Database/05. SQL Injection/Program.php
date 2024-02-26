<?php
/*

SQL Injection
Saat membuat aplikasi, kita tidak mungkin melakukan hardcode perintah SQL di kode PHP kita.
Biasanya kita akan menerima input data dari user, lalu membuat perintah SQL dari input user,
dan mengirimkan perintah SQL.

---- Membuat Tabel Admin ----
CREATE TABLE admin
(
    username    VARCHAR(100)    NOT NULL,
    password    VARCHAR(100)    NOT NULL,
    PRIMARY KEY (username)
) 
ENGINE = InnoDB;

Masukan data dummy untuk Admin
INSERT INTO admin(username, password) VALUES("admin", "admin");

SQL Injection
SQL Injection adalah sebuah teknik yang menyalahgunakan sebuah celah keamanan yang terjadi
dalam lapisan basis data sebuah aplikasi.
SQL Injection biasa dilakukan dengan mengirim input dari user dengan perintah yang salah,
sehingga menyebabkan hasil SQL yang dibuat menjadi tidak valid.

Solusi SQL Injection
Jangan membuat query SQL secara manual dengan menggabungkan string secara bulat-bulat.
Function query() & exec() tidak bisa menangani celah SQL Injection, jadi harus menanganinya secara manual.
Direkomendasikan menggunakan query() & exec() hanya ketika tidak butuh parameter input dari user saat
membuat perintah SQL.
Jika membutuhkan parameter dari input user, kita wajib menggunakan function 'prepare()'.
Atau bisa juga memastikan input user aman dengan menggunakan function quote().

Look at:
• 

*/

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

# asumsi data ini datang dari user melalui form login
// $username = "admin";
// $password = "admin";

# pakai username & password ini untuk demonstrasi SQL Injection
# Perintah SQL Injection jika menggunakan data input di bawah: 
# SELECT * FROM admin WHERE username = 'admin'; #' AND password = 'admin'
$username = "admin'; #";
$password = "admin";

# membuat perintah SQL dari input user
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

$isSuccess = false;
$find_user = null;

$result = $connection->query($sql);
foreach ($result as $row) {
    $isSuccess = true;
    $find_user = $row["username"];
}

if ($isSuccess) {
    echo "Sukses login : " . $find_user . PHP_EOL;
}

$connection = null;

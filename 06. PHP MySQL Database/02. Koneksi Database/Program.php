<?php
/*

Koneksi Database
Sebelum melakukan manipulasi data di database dengan perintah SQL, hal yang perlu dilakukan terlebih dahulu
adalah membuat koneksi ke database.
Kita perlu membuat objek dari class PDO untuk membuat koneksi ke database MySQL.
Saat pembuatan objek PDO kita perlu menentukan host, port, nama database, username, dan passwordnya.

Untuk OS Windows 10 ada masalah di hak akses Xampp:
• https://winpoin.com/cara-mengatasi-xampp-error-cannot-create-file-xampp-control-ini-access-denied-ketika-akan-ditutup/

Tambah path ini ke environment variable agar bisa menjalankan mysql di CMD;
• C:\xampp\mysql\bin

Aktifkan service MySQL di Xampp Control Panel
Di CMD input perintah: 
• mysql -u root                                 (login sebagai user root)
• show databases;                               (lihat database)
• create database belajar_php_database;         (membuat database)

Error PDOException
Hampir semua error yang terjadi di PDO merupakan class exception dari PDOException atau class turunannya.
Sehingga jika kita ingin melakukan sesuatu jika terjadi koneksi error ke database, kita bisa gunakan try-catch.

Menutup Koneksi
Jika kita telah selesai melakukan operasi ke database, lalu kita sudah tidak memerlukannya lagi, maka 
kita wajib menutup koneksi ke databasenya.
Setiap database punya batas maksimal koneksi ke database, contoh MySQL secra default batas maksimalnya
adalah 151 koneksi.
Jika sampai kita lupa menutup koneksi sehingga koneksi dianggap masih terbuka, maka lama kelamaan koneksi 
bisa cepat mencapai maksimal koneksi, sehingga ketika kita ingin membuat koneksi baru, maka akan ditolak
oleh MySQL.

*/

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";
$dataSourceName = "mysql:dbname=$database;host=$host:$port";

try 
{
    $connection = new PDO($dataSourceName, $username, $password);       # membuka koneksi ke database dengan membuat objek PDO
    echo "Sukses terkoneksi ke database";
    $connection = null;                                                 # menutup koneksi ke database
} 
catch (PDOException $ex) 
{
    echo "Error terkoneksi ke database : " . $ex->getMessage() . PHP_EOL;
}

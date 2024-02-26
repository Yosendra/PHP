<?php
/*

Query SQL
Class PDO memiliki function bernama 'query()' digunakan untuk melakukan query data dari database.
Return value dari funciton query() adalah sebuah object dari PDOStatement.

PDOStatement
PDOStatement adalah sebuah class turunan dari IteratorAggregate.
Kelas yang merupakan turunan dari kelas IteratorAggregate secara otomatis bisa menggunakan perulangan foreach.
Oleh karenanya, kita bisa melakukan iterasi dari objek PDOStatement dengan foreach untuk penelusuran
tiap baris record hasil dari query SQLnya.

Look at:
• 

*/

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

# Perintah SQL yang ingin dijalankan
$sql = "SELECT id, name, email FROM customers";

# Eksekusi perintah sql dengan mehtod query() karena kita mengharapkan result data dari database
$result = $connection->query($sql);

# lakukan penelusuran dari hasil query baris-per-baris dengan foreach
foreach ($result as $row) {
    var_dump($row);

    # bisa diakses dengan key
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    # bisa diakses dengan index
    $id = $row[0];
    $name = $row[1];
    $email = $row[2];
}

# Tutup koneksi
$connection = null;

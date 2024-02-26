<?php
/*

Fetch Data
Sebelumnya saat kita melakukan query biasanya menggunakan perulangan foreach untuk melakukan iterasi
terhadap object PDOStatement.
Permasalahannya foreach akan melakukan penelusuran di seluruh hasil result. Bagaimana jika kita hanya
ingin mengambil data pertama saja?
Untungnya PDOStatement memiliki sebuah function bernama fetch() yang dapat digunakan untuk menarik satu
data dari hasil query. Ketika mamnggil fetch() lagi, maka data berikutnya yang akan diambil, dan seterusnya.
Jika fetch() mengembalikan nilai false, berarti sudah tidak ada data lagi yang bisa diambil dari hasil query.
Jika ingin mengambil seluruh data sekaligus, bisa gunakan fetchAll().

*/

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->execute([$username, $password]);

if ($row = $result->fetch())            # menggunakan fetch(), lebih ringkas
    echo "Sukses login" . PHP_EOL;
else
    echo "Gagal login" . PHP_EOL;


    
$sql = "SELECT * FROM customers";
$result =  $connection->query($sql);
$customers = $result->fetchAll();        # menggunakan fetchAll(), mengembalikan array yang berisi seluruh baris data dari result query

var_dump($customers);

$connection = null;

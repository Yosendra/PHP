<?php
/*

Prepare Statement
Cara yang lebih aman untuk membuat SQL dengan input parameter dari user adalah dengan menggunakan 
function 'prepare()'.
Function prepare() akan menghasilkan object PDOStatement dimana kita bisa melakukan binding
parameter ke perintah SQL yang kita buat.
Ini lebih aman dibandingkan menggunakan function quote() secara manual karena rawan lupa.
Dengan menggunakan function prepare(), penulisan string query SQL menjadi sedikit berbeda.
Ketika ingin menambahkan parameter, kita harus menambah prefix titik dua (:) di depan nama parameter.

Binding Parameter
Setelah menentukan dimana kira-kira paremeter akan digunakan di kode SQL.
Kita wajib melakukan binding parameter dengan input dari user.
Secara otomatis semua input dari user akan di quote() oleh prepare statement, jadi tidak
perlu melakukannya secara manual.
Hal ini membuat penggunaan prepare statement lebih aman dibandingkan manual melakukan quote(). 

Binding Parameter dengan Index
Selain menggunakan kata kunci :namaparemeter untuk melakukan binding kita juga bisa
menggunakan index (angka).
Cukup mengganti :namaparameter dengan tanda tanya (?).
Lalu gunakan nomor index saat melakukan bindParam(index, value).

Bisa lebih dipersingkat lagi tanpa menggunakan bindParam(), kita mempassing valuenya di execute().
    $username = "admin";
    $password = "admin";

    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $result = $connection->prepare($sql);
    $result->execute([$username, $password]);
*/

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

// $username = "admin";
// $password = "admin";

$username = "admin'; #";
$password = "admin";

# perhatikan parameter yang diawali titik dua
// $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";

# binding parameter menggunakan index dengan tanda ?
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$isSuccess = false;
$find_user = null;

# eksekusi query menggunakan method 'prepare()', namun ini belum selesai karena kita belum binding nilainya.
$result = $connection->prepare($sql);

# lakukan binding terhadap parameter pada query terhadap nilai yang ingin diinputkan
// $result->bindParam("username", $username);  # username dan password adalah nama parameter
// $result->bindParam("password", $password);  # yang kita berikan saat membuat query di line-36

# binding dengan index, gunakan index angka jika menggunakan simbol tanda tanya pada parameter
$result->bindParam(1, $username);
$result->bindParam(2, $password);

# eksekusi query yang sudah ter-binding
$result->execute();

foreach ($result as $row) {
    $isSuccess = true;
    $find_user = $row["username"];
}

if ($isSuccess) {
    echo "Sukses login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;

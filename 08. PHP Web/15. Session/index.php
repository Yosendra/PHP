<?php
/*

Session
Session adalah mekanisme yang biasa digunakan untuk mengingat interaksi sebelumnya dari client.
Di spesifikasi HTTP tidak dikenal yang namanya session karena HTTP di desain stateless 
(tidak menyimpan state, data atau informasi apapun).
Session adalah teknik dimana kita bisa menyimpan informasi client di server, sehingga ketika ada 
request dari client yang sama, kita bisa tahu dari server.
Contohnya session biasanya digunakan untuk proses login, setelah login sukses, kita akan membuat 
session dan request selanjutnya dari client akan membawa informasi session tersebut.

Memastikan Fitur Session di PHP
Untuk menggunakan fitur session di PHP, kita harus pastikan fitur tersebut aktif.
Kita bisa melihatnya di phpinfo(): cari "Session"
Detail: https://www.php.net/manual/en/book.session.php

$_SESSION
$_SESSION adalah global variable array yang berisi data di session.
Setelah session kita start, kita bisa menggunakan $_SESSION untuk menyimpan data di session,
atau mengambil data di session.
Jika session belum distart, perubahan yang kita lakukan di $_SESSION atau pengambilan data di $_SESSION
tidak akan berpengaruh apa-apa.

Masalah dengan PHP Session
PHP menyimpan session di file.
Hal ini tidak direkomendasikan untuk menyimpan data yang terlalu besar di session karena setiap kita melakukan session_start()
maka secara otomatis session akan di load dari file, dan setelah request selesai session akan di save di file.
Selain itu penggunaan file menyebabkan masalah scalability karena jika kita menjalankan 2 web PHP secara bersamaan di server
yang berbeda, bisa jadi session nya menghilang ketika request dari client masuk ke server yang berbeda.
Oleh karena itu penggunaan session di PHP sebenarnya jarang sekali digunakan di web yang sudah besar, biasanya akan menggunakan
alternatif lain untuk management session seperti Secure Cookie atau JWT (Json Web Token).

*/

session_start();  # menjalankan session, wajib jika ingin menggunakan session

if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
      header("Location: /member.php");
      exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
            $_SESSION["login"] = true;                      # set variable session
            $_SESSION["username_login"] = "admin";
            header("Location: /member.php");
            exit();
      } else {
            $error = "Login Gagal";
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <title>15. Session</title>
</head>
<body>
      <h1><?= $error ?></h1>
      <form action="" method="post">
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">

            <label for="password">Password : </label>
            <input type="password" name="password" id="password">

            <input type="submit" value="Login">
    </form>
</body>
</html>
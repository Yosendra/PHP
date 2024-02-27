<?php
/*

Download File
Saat membuat web, kadang kita butuh mengembalikan content berupa file yang butuh didownload oleh client.
Sebenarnya kita bisa langsung mengakses file tersebut melalui url, namun jika kita mau, kita juga bisa menggunakan
PHP untuk membuat content dalam bentuk file dan memaksa client untuk mendownloadnya. 

Download File di PHP
Memaksa client untuk melakukan download file, sebenarnya sudah ada di standard HTTP Header.
Yaitu menggunakan key Content-Disposition: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Disposition
Jadi di PHP kita cukup dengan menambahkan header tersebut, maka kita bisa secara otomatis memaksa browser untuk 
mendownload file yang kita buat menggunakan PHP.
Untuk membaca file dan meloadnya di PHP, kita bisa menggunakan function readfile().
Detail: https://www.php.net/manual/en/function.readfile.php

Test: request ke "/readfile.php?key=rahasia", akan mendownload file logo.jpg

*/

header("Content-Disposition: attachment"); # memaksa untuk mendownload halaman. Tidak dirender.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Download HTML</title>
</head>
<body>
    <h1>Download HTML</h1>
</body>
</html>

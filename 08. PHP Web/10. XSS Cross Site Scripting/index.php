<?php
/*

XSS (Cross Site Scripting)
XSS merupakan celah keamanan yang biasanya dieksploitasi oleh penyerang dengan cara mengirim script pada parameter.
Jika sampai pembuat kode salah melakukan render halaman web, maka script tersebut akan di render di halaman web, 
dan bisa menyebabkan penyerang mengirimkan kode Javascript.
Hal ini sangat berbahaya karena penyerang bisa mencuri session pengguna yang sedang login di web kita.

Contoh XSS: http://localhost:8080/?name=John<h1><script>alert("Ups di Hack")</script></h1>

Cara Mencegah XSS
Kita perlu berhati-hati ketika ingin menampilkan text yang inputnya berasal dari user.
Jika kita tidak tau apakah input berisi tag HTML, gunakan fungsi 'htmlspecialchars()'
Fungsi tersebut akan secara otomatis melakukan encode special character di html agar di render menjadi teks biasa.
Detail: https://www.php.net/manual/en/function.htmlspecialchars.php

Dimanapun ketika ingin merender tulisan, dan inputnya berasal dari user, gunakan htmlspecialchars()
agar terhindar dari serangan cross-site scripting

*/
?>

<?php
    $name = $_GET['name'] ?? "";
    $namev2 = htmlspecialchars($name);      # encode jika ada tag html

    $say = "Hello $name";
    $sayv2 = "Hello $namev2";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1><?= $say ?></h1>        <!-- Saat merendender $say, script javascript ikut terender -->
    <h1><?= $sayv2 ?></h1>      <!-- setelah difilter oleh fungsi htmlspecialchars() -->
</body>
</html>
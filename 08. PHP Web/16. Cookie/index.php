<?php
/*

Cookie
Cookie adalah data dalam bentuk key-value yang dikirim oleh server pada HTTP response untuk disimpan di client (Web Server).
Ketika web server menerima cookie, secara otomatis pada request selanjutnya, cookie tersebut akan dikirim di setiap HTTP request yang 
dilakukan ke server.
Detail: https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies

Cookie di PHP
Untuk membuat cookie di PHP kita bisa menggunakan fungsi setcookie().
Detail: https://www.php.net/manual/en/function.setcookie.php
Cookie merupakan bagian dari HTTP Header, jadi pastikan cookie dibuat sebelum content dirender PHP.
Unutk membaca cookie yang dikirim oleh client, kita bisa gunakan global variable $_COOKIE
Detail: https://www.php.net/manual/en/reserved.variables.cookies.php

Test: cek apakah cookie tersimpan di browser dengan cara ke Developer Tools -> Application -> Storge (cari kategori Cookie)

Hati-Hati Menggunakan Cookie
Jangan terlalu banyak data di cookie karena semua data di cookie akan selalu dikirim di setiap HTTP request.
Semakin banyak, semakin lambat karena data yang harus dikirim juga banyak.
Cookie bisa diubah oleh user, jadi jangan mudah percaya dengan isi cookie.
Misal menyimpan informasi hak akses di cookie.

*/

setcookie('X-BELAJAR-COOKIE', 'JOHN');
header("Location: /show-cookie.php");
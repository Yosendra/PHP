<?php
/*

Redirect
Dalam pembuatan web, melakukan redirect dari satu halaman ke halaman lain adalah hal biasa.
Misal setelah sukses login, kita akan redirect halaman webnya ke halaman member atau admin.
Atau bahkan melakukan redirect ke domain yang berbeda, misal ketika login dengan Google, setelah berhasil login,
akan diredirect ke halaman web kita lagi.

HTTP Redirect
Redirect sendiri sudah merupakan sesuatu yang standard di HTTP.
Untuk melakukan redirect, kita hanya butuh menggunakan response header Location yang berisi url redirectnya,
bisa dalam domain yang sama atau ke domain yang berbeda.
Misal: 
Location: /admin.php -> artinya redirect ke halaman admin di domain yang sama
Location: https://www.google.com -> artinya redirect ke halaman google

Test: akses ke localhost, cek network, lihat response header terdapat key 
      "Location: /php-info.php" dan status code 302 yang artinya adalah redirect
*/

header("Location: /php-info.php");                  # secara langsung akan di redirect ke halaman php-info.php
// header("Location: https://www.google.com");
exit();                                             # pastikan tidak ada konten setelahnya

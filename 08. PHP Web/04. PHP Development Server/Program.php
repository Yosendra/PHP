<?php
/*

PHP Development Server
Agar web dapat diakses, kita perlu menyimpan web di dalam aplikasi web server.
Saat menginstall Xampp, di dalamnya terdapat aplikasi Apache HTTPD. Itu adalah salah satu aplikasi web server.
Namun kita akan menggunakan web server yang lebih sederhana yang disediakan oleh PHP yaitu PHP Development Server.

Peringatan:
PHP Development Server adalah aplikasi web server untuk membantu mempermudah menjalankan web server untuk PHP web.
Fitur ini hanya untuk proses development, bukan untuk dijalankan di web host.
PHP Development Server hanya memiliki satu thread, artinya hanya bisa menjalankan satu proses dalam satu waktu.

Menjalankan PHP Development Server
Perintah: php -S host:port
Di komputer pribadi kita bisa gunakan host dengan nama 'localhost'
Untuk nomor port kita bisa gunakan bebas, asal port nya tidak digunakan oleh aplikasi lain.
Misal: php -S localhost:8080
Artinya PHP Development Server bisa diakses di http://localhost:8080
Ingat! kita wajib menjalankan perintah ini di folder tempat kita menyimpan kode program PHP kita.

Misal di CMD, pastikan current working directory berada di direktori folder "D:\Practice\PHP (Remedy)\08. PHP Web\04. PHP Development Server>"
kemudian masukan perintah untuk menjalankan PHP Development Server di atas.
Kemudian akses alamat http://localhost:8080 di web browser.
Secara default, web server menggunakan file index.php atau index.html sebagai entry point. Maka dari itu kita buat file index.html
untuk dijadikan file pertama yang akan diakses ketika menuju alamat http://localhost:8080.

Hot Reload
PHP adalah bahasa pemrograman yang tidak butuh dicompile terlebih dahulu.
Selain itu PHP juga mendukung fitur hot reload, artinya setiap perubahan yang kita lakukan di kode program PHP,
kita tidak butuh melakukan restart aplikasi Web Server nya.
Cukup melakukan request ulang dari web browser. Secara otomatis web server akan menjalankan kode program PHP terbaru kita.

Untuk mematikan web server, pada terminal kita menjalankan perintah web server, masukan perintah Ctrl + C

*/
<?php
/*

Sebelum Dependency Management
Saat kita membuat aplikasi, biasanya kita sering sekali membutuhkan library atau framework.
Sebelum menemukan dependency management, jika kita membutuhkan library atau framework,
maka kita perlu download library atau framework tersebut secara manual. Setelah itu kita masukan
ke dalam kode program kita.
Jika librarynya sederhana, mungkin masih mudah untuk mengelolanya, tapi bagaimana jika ternyata library
tersebut membutuhkan library lain dan tidak hanya satu tapi banyak.
Alhasil kita harus download semua library yang dibutuhkan oleh library yang kita butuhkan.
Belum lagi, kita harus tahu versi berapa library lain yang digunakan oleh library yang kita gunakan.
Dan kadang project kita pun menjadi bengkak karena ukuran library yang terlalu banyak.

Dependency Management
Masalah yang sudah dibahas sebelumnya bisa kita hindari jika kita menggunakan Dependency Management Tool.
Dependency Management Tool bertugas mendownload semua library yang kita butuhkan beserta library yang dibutuhkan
libarary yang kita gunakan. Semua dilakukan secara otomatis.
Dan juga Dependency Management Tool bisa download library sesuai dengan versi yang dibutuhkan secara otomatis.

Pengenalan Composer
Composer salah satu Dependency Management Tool yang populer untuk PHP.
Composer terinspirasi dari dependency management NPM (nodejs) dan Bundler (ruby).
Dengan composer kita cuku membuat konfigurasi file yang berisi dependency yang kita butuhkan.
Composer akan secara otomatis download semua library dan dependencynya yang dibutuhkan sesuai dengan versi yang kita gunakan.
Kita juga bisa update versi library yang kita gunakan dengan mudah hanya dengan mengubah versi di file konfigurasi
yang terdapat di project kita. 
Detail: https://getcomposer.org

*/
<?php
/*

PHP Web. PHP sejak awal memang diperuntukan untuk membuat aplikasi web.

Cara Kerja PHP Web

            1. Request              2. Eksekusi
            ---------->             ----------->
Web Browser             Web Server               PHP (3. Render)
(6. Render) <----------             <-----------           
            5. Response             4. Content (HTML, JS, CSS)

1. Web browser akan melakukan HTTP request ke web server.
2. Web server menerima HTTP request lalu mengeksekusi file PHP yang sesuai dengan request tersebut.
3. File PHP akan dieksekusi, lalu akan menjalankan kode program PHP. Hasilnya akan dirender menjadi
   content yang sesuai dengan yang dilakukan di kode program.
4. Hasil content yang dibuat PHP (HTML, CSS, JS) akan dikembalikan ke web server.
5. Web server mengembalikan content sebagai HTTP response ke web browser.
6. Web browser menerima content dari web server lalu merender content tersebut sesuai dengan tipe contentnya.



*/
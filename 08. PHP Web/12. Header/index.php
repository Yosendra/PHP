<?php
/*

Header
Dalam HTTP request dan reesponse terdapat data yang bernama Header.
Header biasanya digunakan sebagai tempat penyimpanan informasi tambahan diluar url, method, dan body.
Di PHP kita bisa menangkap data header yang dikirim oleh client atau membuat header di response dari server.

Menarima Header Request
Semua header yang dikirim oleh client secara otomatis akan dimasukan ke global variable $_SERVER
Namun key untuk header akan secara otomatis dikonversi menjadi UPPERCASE, dan jika terdapat spasi atau -
akan otomatis diganti menjadi _
Selain itu untuk membedakan request header dan lainnya, khusus request header akan ditambah prefix HTTP_
Misal header Content-Type akan menjadi HTTP_CONTENT_TYPE, header Accept-Language akan menjadi HTTP_ACCEPT_LANGUAGE

Test: kirim lewat Postman dengan tambahan header key Client-Name, value bebas diisi apa saja

Menambahkan Header Response
Kadang kita ingin menambah informasi tambahan di HTTP response misalnya kita ingin mencantumkan versi aplikasi kita atau lainnya.
Kita bisa menambahkan header dengan menggunakan fungsi 'header()' di PHP.
Perlu diingat, di spesifikasi HTTP, header berada pada posisi atas sebelum content dibuat, oleh karena itu pastikan menambah
header sebelum kita membuat content.

Test: kirim lewat Postman sama seperti sebelumnya, namun lihat di bagian header response-nya

*/

# menambah key-value di header response
header("Application: Belajar PHP Web");
header("Author: John Doe");

$client = $_SERVER["HTTP_CLIENT_NAME"] ?? "";
echo "Hello $client";

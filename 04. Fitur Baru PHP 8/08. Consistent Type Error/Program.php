<?php
/*

Consistent Type Error
Saat kita membuat function dan ketika kita mengirim argument dengan tipe data yang salah,
maka akan berakibat terjadi TypeError.
Sayangnya di PHP banyak function bawaan yang tidak mengembalikan TypeError, malah memberi warning.
Agar konsisten, serakarang di PHP 8, banyak function bawaan yang akan error TypeError jika salah mengirim
tipe data.
More detail: https://wiki.php.net/rfc/consistent_type_errors

*/

strlen([]);     # tipe data tidak sesuai, yang diminta strlen() adalah string, bukan array. Lempar exception TypeError
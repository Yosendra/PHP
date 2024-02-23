<?php
/* 

String to Number Comparison
Salah satu yang membingungkan di PHP adalah ketika kita melakukan perbandingan number dan string.
Misal kita bandingkan 0 == "john", maka hasilnya true.
Kenapa true? Karena PHP akan melakukan type jugling dan mengubah "john" menjadi 0, sehingga hasil true.
Di PHP 8, khusu perbandingan String ke Number diubah agar tidak membingungkan.
More detail: https://wiki.php.net/rfc/string_to_number_comparison

Comparison          Before | After
0 == "0"            true     true
0 == "0.0"          true     true
0 == "foo"          true     false
0 == ""             true     false
42 == "   42"       true     true
42 == "42foo"       true     false

*/


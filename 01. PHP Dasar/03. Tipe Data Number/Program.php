<?php
/*

Di PHP terdapata 2 jenit tipe data number
• (int) Bilangan bulat
• (float) Bilangan pecahan

var_dump() : fungsi built-in pada PHP untuk melihat keterangan dari suatu data, datanya apa, dan tipe datanya apa

*/

echo "Decimal : ";
var_dump(1234);
echo "Octal : ";
var_dump(01234);
echo "Hexadecimal : ";
var_dump(0x1A);
echo "Binary : ";
var_dump(0b1111111);
echo "Underscore in number : ";
var_dump(1_000_000_000);    // untuk memudahkan membaca bisa gunakan underscore (_)

echo "Floating point : ";
var_dump(1.234);
echo "Floating point dengan E notation plus (1.2 x 1000) : ";
var_dump(1.2e3);
echo "Floating point dengan E notation minus (1.2 x 0.001) : ";
var_dump(1.2e-3);
echo "Underscore di Floating Point : ";
var_dump(1_234.567);
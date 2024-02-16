<?php
/*

Tipe data string adalah tipe data representasi dari teks
String bisa mengandung kosong atau banyak karakter

*/

// Single Quote
echo 'Nama: John Doe';

// Double Quote. Kelebihannya kita dapat menggunakan escape sequence (\n untuk ENTER, \t untuk TAB)
echo "\n";
echo "Nama:\t John Doe";

// Multiline String (Heredoc & Nowdoc)
// • Heredoc (bisa menggunakan escape sequence)
echo "\n";
echo <<< PESAN
Lorem \t ipsum
Dolor sit amet
PESAN;

// • Nowdoc (tidak bisa menggunakan escape sequence)
echo "\n";
echo <<< 'PESAN'
Lorem \t ipsum
Dolor sit amet
PESAN;
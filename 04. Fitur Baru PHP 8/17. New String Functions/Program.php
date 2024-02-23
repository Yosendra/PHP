<?php
/*

New String Functions
Di PHP 8 terdapat beberapa funciton untuk manipulasi string.
• https://wiki.php.net/rfc/str_contains
• https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions

str_contains($string, $contains): bool      Mengecek apakah $string mengandung $contains
str_starts_with($string, $value): bool      Mengecek apakah $string memiliki awal $value
str_ends_with($string, $value): bool        Mengecek apakah $string memiliki akhir $value

*/

var_dump(str_contains("John Doe", "John"));
var_dump(str_starts_with("John Doe", "John"));
var_dump(str_ends_with("John Doe", "Doe"));

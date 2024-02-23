<?php
/*

Comma di Parameter List
Di PHP 8 serakarang kita bisa menambahkan karakter koma (,) di akhir parameter list sepreti ketika memanggil 
function, membuat array, dan lainnya.
Detail: 
• https://wiki.php.net/rfc/trailing_comma_in_parameter_list
• https://wiki.php.net/rfc/trailing_comma_in_closure_use_list

*/

function sayHello(string $first, string $last): void
{
}
sayHello("John", "Doe", );                                      # perhatikan koma setelah argument terakhir. Ini diizinkan oleh PHP

$array = [1, 2, 3, 4, 5, ];                                     # tanda koma setelah element 5 tidak dianggap error
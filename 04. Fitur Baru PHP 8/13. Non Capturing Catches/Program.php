<?php
/*

Non Capturing Catches
Saat terjadi error di PHP biasanya kita akan menggunakan try-catch.
Lalu dalam catch kita akan menangkap error dan menyimpannya dalam variable exception.
Walaupun sebenarnya tidak kita gunakan, kita tetap harus membuat variable exceptionnya.
Di PHP 8 sekarang kita tidak wajib membuat variable exceptionya jika memang tidak akan menggunakannya.
Detail: https://wiki.php.net/rfc/non-capturing_catches

*/

function validate(string $name)
{
    if (trim($name) == "")
        throw new Exception("Invalid name");
}

try 
{
    validate(" ");
} 
catch (Exception)       # kita tidak perlu membuat variable exception ($ex), cukup tipe exceptionnya
{
    echo "Invalid name" . PHP_EOL;
}
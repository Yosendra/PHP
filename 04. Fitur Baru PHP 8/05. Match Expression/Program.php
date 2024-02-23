<?php
/*

Match Expression
PHP 8 menambahkan struktur kontrol baru bernama match expression.
Match expression adalah struktur kontrol yang mirip dengan switch-case, namun lebih baik.
Match adalah expression, artinya dia menghasilkan value.
More details:
• https://wiki.php.net/rfc/match_expression_v2
• https://www.php.net/manual/en/control-structures.match.php

Non Equals Check di Match Expression
Selain equals check, berbeda dengan switch-case, di match expression kita bisa melakukan pengecekan kondisi lainnya.
Misal pengecekan menggunakan kondisi perbandingan bahkan pengecekan kondisi berdasarkan boolean expression yang dihasilkan dari sebuah function.

*/

$result = "";

$value = "A";
switch ($value) {                                   # Menggunakan switch-case statement
    case "A":
    case "B":
    case "C":
        $result = "Anda lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Sepertinya Anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu?";
        break;
}
echo $result . PHP_EOL;

$value = "D";
$result = match ($value)                            # Menggunakan match expression
{
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Sepertinya Anda salah jurusan",
    default => "Nilai apa itu?"
};
echo $result . PHP_EOL;

$value = 80;
$result = match (true)                              # Non Equals Match Expression
{
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};
echo $result . PHP_EOL;

$name = "Mr. John";
$result = match (true)                              # Match Expression dengan Kondisi
{
    str_contains($name, "Mr. ") => "Hello Sir",
    str_contains($name, "Mrs. ") => "Hello Mam",
    default => "Hello"
};
echo $result . PHP_EOL;

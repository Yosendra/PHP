<?php
/* 

Di PHP, Array memiliki operator khusus

Bila $a dan $b adalah array:
$a + $b         Union           Gabung kedua array
$a == $b        Equality        True bila $a dan $b memiliki key-value sama
$a === $b       Identity        True bila $a dan $b memiliki key-value sama dan posisi sama
$a != $b        Inequality      True bila $a dan $b tidak sama
$a <> $b        Inequality      True bila $a dan $b tidak sama
$a !== $b       Nonidentity     True bila $a dan $b tidak identik

*/

$a = ["firstName" => "John"];
$b = ["firstName" => "Khenedy", "lastName" => "Doe"];
var_dump($a + $b);      // Union

$a = ["firstName" => "John", "lastName" => "Doe"];
$b = ["lastName" => "Doe", "firstName" => "John"];
var_dump($a == $b);     // Equality
var_dump($a === $b);    // Identity

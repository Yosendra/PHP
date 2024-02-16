<?php
/* 

Operator penugasan (=)
Selain digunakan untuk mengisi nilai ke variable ($a = "string")
Operator ini dapat digunakan untuk penugasan aritmatika

$a += $b        ->      $a = $a + $b
$a -= $b        ->      $a = $a - $b
$a *= $b        ->      $a = $a * $b
$a /= $b        ->      $a = $a / $b
$a %= $b        ->      $a = $a % $b

*/

$total = 0;
$nasi = 3000;
$ayam = 5000;
$lele = 4000;

$total += $nasi;
$total += $ayam;
$total += $lele;

var_dump($total);
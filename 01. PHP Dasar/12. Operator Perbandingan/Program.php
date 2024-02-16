<?php
/* 

Operator perbandingan digunakan untuk membandingkan dua buah value.
Hasil dari operator ini ada adalah tipe boolean.

$a == $b        Sama dengan, 10 sama dengan "10"
$a === $b       Identik, nilai dan tipe sama, 10 tidak sama dengan "10"
$a !== $b       Tidak Identik
$a != $b        Tidak sama dengan
$a <> $b        Tidak sama dengan
$a > $b         Lebih dari
$a < $b         Kurang dari
$a >= $b        Lebih dari atau sama dengan
$a <= $b        Kurang dari atau sama dengan

*/

var_dump(10 == "10");
var_dump(10 === "10");

var_dump(9 > 9);
var_dump(9 >= 9);
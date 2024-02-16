<?php
/* 

Operator logika adalah operator untuk membandingkan dua nilai boolean
Hasil dari operator ini adalah boolean lagi

$a && $b        And     true bila kedua true
$a and $b       And     
$a || $b        Or      true bila salah satunya true
$a or $b        Or
!$a             Not     true bila $a adalah false, false bila $a adalah true
$a xor $b       Xor     true bila salah satunya true, namun tidak keduanya

*/

$a = true;
$b = false;

var_dump($a && $b);
var_dump($a || $b);
var_dump($a xor $b);
var_dump(!$a);
<?php
/* 

Operator Increment (++) dan Decrement (--)
$a++    Post Increment      Kembalikan nilai $a, lalu naikan satu angka
++$a    Pre Increment       Naikan $a satu angka, lalu kembalikan $a
$a--    Post Decrement      Kembalikan nilai $a, lalu kurangkan satu angka
--$a    Pre Decrement       Kurangkan $a satu angka, lalu kembalikan $a

*/

echo "Post Increment\n";
$a = 2;
var_dump($a++);
var_dump($a);

echo "Post Decrement\n";
$a = 2;
var_dump($a--);
var_dump($a);

echo "Pre Increment\n";
$a = 2;
var_dump(++$a);

echo "Post Decrement\n";
$a = 2;
var_dump(--$a);

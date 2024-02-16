<?php
/* 

Do While Loop statement
do {
    statement
} 
while (condition);

Paling sedikit statement dieksekusi sebanyak 1x

*/

$a = 0;
do {
    echo "Looping 10 times: ". ($a + 1) . PHP_EOL;
    $a++;
} while ($a < 10);
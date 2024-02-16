<?php
/* 

Break & Continue
Break       : digunakan untuk menghentikan seluruh perulangan
Continue    : digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya

*/

$counter = 1;
while (true) {
    echo "Hello Break : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) 
        break;                      // break from infinite loop
}

for ($counter=0; $counter < 100; $counter++) { 
    if ($counter % 2 == 0)
        continue;                   // skip the next statement, but still continue the loop
    
    echo "Hello Continue " . $counter . PHP_EOL;
}

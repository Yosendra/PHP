<?php
/* 

For Each Loop
Digunakan untuk melakukan penelusuran data yang ditampung oleh array

*/

$grades = ["A", "B", "C", "D", "E"];

foreach ($grades as $grade) {
    echo "Grade : " . $grade . PHP_EOL;
}

foreach ($grades as $key => $value) {               // jika butuh index dari setiap elemen array
    echo "Index : $key, Grade : $value" . PHP_EOL;
}
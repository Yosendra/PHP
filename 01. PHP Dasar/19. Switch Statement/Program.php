<?php
/* 

Switch statement
Ketika percabangan hanya membutuhkan perbandingan ==, maka gunakan switch statement

*/

$nilai = 'B';
switch ($nilai) {
    case 'A':
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Anda lulus" . PHP_EOL;
        break;
    case 'D':
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
        break;
}
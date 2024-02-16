<?php
/* 

If Statement - Percabangan
Percabangan artinya bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi.

if (boolean expression) {
    statement...
}

Else Statement
Blok if akan dieksekusi ketika kondisi if bernilai true
Ketika kondisi tidak terpenuhi, eksekusi statement pada blok else

if (boolean expression) {
    statement...
} else {
    statement...
}

Else If Statement
If statement dengan lebih dari satu kondisi

if (boolean expression) {
    statement...
} else if (boolean expression) {
    statement...
} else {
    statement...
}

*/

$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {             // if...
    echo "Anda Lulus" . PHP_EOL;
}

if ($nilai >= 75 && $absen >= 75) {             // if...else...
    echo "Anda Lulus" . PHP_EOL;
} else {
    echo "Anda Tidak Lulus" . PHP_EOL;
}

$nilai = 80;
if ($nilai >= 90) {                             // if...else...if....
    echo "Nilai Anda adalah A" . PHP_EOL;
} else if ($nilai >= 80) {
    echo "Nilai Anda adalah B" . PHP_EOL;
} else {
    echo "Nilai Anda adalah C" . PHP_EOL;
}

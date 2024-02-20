<?php
/*

Generator
Generator adalah fitur PHP yang digunakan untuk membuat objek Iterator secara otomatis hanya dengan
menggunakan kata kunci 'yield'

*/

function getGanjil(int $max): Iterator
{
    for ($i=0; $i < $max; $i++)
        if ($i % 2 == 1)
            yield $i;               # yield keyword
}

$ganjil = getGanjil(100);
foreach ($ganjil as $value)
    echo "Ganjil $value" . PHP_EOL;

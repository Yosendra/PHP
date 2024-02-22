<?php

class Kelas
{
    public string $property;
}

function fungsi(Kelas $kelas)
{
    $kelas->property = "Modified inside 'fungsi'";
}

$kelas = new Kelas();
$kelas->property = "Modified in 'global'";

fungsi($kelas);                                             # pass-by-reference

echo $kelas->property . PHP_EOL;
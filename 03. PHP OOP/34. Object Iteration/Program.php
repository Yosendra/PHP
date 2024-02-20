<?php
/*

Object Iteration
Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang
terdapat di object tersebut menggunakan foreach.
Secara default hanya public properties yang dapat diakses oleh foreach.

*/

class Data
{
    var string $first = "first";            # defaultnya public
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";
}

$data = new Data();

foreach ($data as $key => $value)
    echo "$key : $value" . PHP_EOL;
# Output: 
# first : first
# second : second

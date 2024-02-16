<?php
/* 

String function : https://www.php.net/manual/en/ref.strings.php

join() / implode()          Menggabungkan array menjadi string
explode()                   Memecah string menjadi array
strtolower()                Mengubah string menjadi lowercase
strtoupper()                Mengubah string menjadi uppercase
substr()                    Mengambil sebagian string
trim()                      Menghapus whitespace di depan dan di belakang string
etc...

*/

var_dump(join(", ", [1, 2, 3]));
var_dump(trim("     John Doe            "));
var_dump(strtoupper("john doe"));
var_dump(strtolower("JOHN doe"));
var_dump(substr("John", 0, 2));

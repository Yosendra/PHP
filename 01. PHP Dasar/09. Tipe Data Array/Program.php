<?php
/* 

Array adalah tipe data yang mampu menampung banyak data
Array di PHP memiliki panjang yang dinamis dan mampu menampung berbagai data dengan yang berbeda

Operasi array:
• $array[index]                 Mengakses data di array pada nomor index
• $array[index] = value         Mengubah data di array pada nomor index dengan value baru
• $array[] = value              Menambah data di array pada posisi paling akhir
• unset($array[index])          Menghapus data di array, index tersebut akan hilang dari array
• count($array)                 Mengambil total data di array

Array asosiasi, array yang indeksnya tidak menggunakan integer, tapi menggunakan string.
Pada array jenis ini, indexnya disebut key, nilai yang dikandung oleh array apa indek key tersebut disebut value
Contoh: $array["satu"] = 1

Array dapat mengandung array lain di dalamnya. Biasa disebut Nested Array

*/

$value = array(0b1, 2, 3, 4, 5.0);      // menggunakan fungsi array()
var_dump($value);

$grade = ["A", "B", "C", "D", "E"];     // menggunakan notasi kurung siku
var_dump($grade);


$names = ["Jack", "Rose", "Leon"];
$names[0] = "Sizar";
var_dump($names[0]);

$names[] = "Henry";
var_dump($names);
var_dump(count($names));

unset($names[2]);
var_dump($names);       // index array menjadi: 0, 1, 3


$array["satu"] = 1;     // array asosiasi, "satu" adalah key, 1 adalah value
var_dump($array);

$grade = array(         // menggunakan array()
    "A" => 100,
    "B" => 80,
    "C" => 70,
);

$grade = [              // menggunakan kurung siku
    "A" => 100,
    "B" => 80,
    "C" => 70,
];

$john = array(          // Nested Array
    "name" => "John",
    "age" => 32,
    "address" => array(
        "city" => "New York",
        "country" => "America",
    )
);
var_dump($john["address"]["city"]);     // mengakses nilai pada nested array
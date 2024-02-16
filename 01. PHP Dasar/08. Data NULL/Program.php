<?php
/* 

Nilai NULL merepresentasikan sebuah variable tanpa nilai.
Saat kita membuat variable lalu ingin menghapus data yang terdapat di variable tersebut,
kita bisa menggunakan NULL untuk mengosongkan variable tersebut.

Untuk mengecek apakah suatu variable bernilai null dapat menggunakan fungsi is_null().
Contoh is_null($nama)

Di PHP kita bisa menghapus sebuah variable dengan fungsi unset()
Setelah variable dihapus, kita tidak bisa mengakses variable tersebut kembali
Gunakan fungsi isset() untuk mengecek apakah variable tersebut ada dan nilai tidak null

*/

$name = "John";
echo $name;     // print John

$name = null;   // kosongkan nilai variable
echo $name;     // print nothing

echo "\n";
echo var_dump(is_null($name));  // is_null()
echo var_dump(isset($name));  // isset(), $name = null, false

$name = "isi";
echo var_dump(isset($name)); // $name = "isi", true

unset($name);
echo var_dump(isset($name)); // false

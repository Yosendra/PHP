<?php
/*

Encapsulation
Eencapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar.
Ini bertujuan agar menjaga data dari object tetap baik dan valid.
Untuk mencapai ini, biadanya kita akan membuat semua properties menggunakan access modifier
private sehingga tidak bisa diakses atau diubah dari luar secara sembarang.
Agar bisa diubah, kita menyediakan function untuk mengubah dan mendapatkan properties tersebut.

Getter & Setter
Di PHP, proses encapsulation sudah dibuat standardisasinya, dimana kita menggunakan Getter & Setter method.
Getter adalah function yang dibuah untuk mengambil data field (variabel private di class).
Setter adalah function yang mengubah data field (variable private di class).

Standard (Konvensi) Getter & Setter Method
• Tipe data         • Getter Method         • Setter Method
boolean             isXxx(): bool           setXxx(bool value)
lainnya             getXxx(): tipeData      setXxx(tipeData value)

Look at:
• Category.php

*/

require_once __DIR__ . "/Data/Category.php";

$category = new Category();
$category->setName("Handphone");                            # menggunakan method setter
$category->setExpensive(true);
$category->setName("         ");                            # isi dengan nilai yang tidak valid

echo "Name : {$category->getName()}" . PHP_EOL;             # menggunakan method getter, nilai name tetap Handphone
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;    # karena validasi

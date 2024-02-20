<?php
/*

Object Cloning
Untuk menduplikasi object, gunakan keyword 'clone'.

__clone() Function
Kadang menyalin semua properties bukanlah yang kita inginkan.
Kita hanya ingin menyalin beberapa property saja.
__clone() function digunakan untuk memodifikasi proses clone.
__clone() function akan dipanggil di object hasil suplikasi setelah proses duplikasi selesai.
Jadi jika kita ingin menghapus beberapa properties, bisa dilakukan di functio __clone().

*/

class Student
{
    public int $id;
    public string $name;
    public int $age;

    function __clone()                  # hapus beberapa property yang tidak ingin diduplikat
    {
        unset($this->age);
    }
}

$student1 = new Student();
$student1->id = 1;
$student1->name = "John";
$student1->age = 18;

$student2 = clone $student1;            # lakukan duplikasi dengan clone

var_dump($student1);
var_dump($student2);

echo $student2->age;                    # error
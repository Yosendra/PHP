<?php
/*

Comparing Object
Untuk membandingkan dua object, dapat menggunakan operator == (equals) dan === (identity)
Operator == membandingkan semua properties yang terdapat di object tersebut dan tiap properties
juga akan dibandingkan menggunakan operator ==.
Sedangkan operator === akan membandingkan apakah object identik, artinya mengacu ke object yang sama.

*/

class Student
{
    public int $id;
    public string $name;
    public int $age;
}

$student1 = new Student();
$student1->id = 1;
$student1->name = "John";
$student1->age = 18;

$student2 = new Student();
$student2->id = 1;
$student2->name = "John";
$student2->age = 18;

var_dump($student1 == $student2);       # equality, true
var_dump($student1 === $student2);      # identity, false
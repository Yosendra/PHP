<?php
/*

Trait Conflict
Jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut.
Maka hal tersebut akan menyebabkan konflik.
Jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci 'insteadof'

Look at:
• TraitA.php
• TraitB.php
• Sample.php

*/

require_once __DIR__ . "/Data/Sample.php";

$sample = new Sample();
$sample->doA();             # invoke doA() milik TraitA
$sample->doB();             # invoke doB() milik TraitB

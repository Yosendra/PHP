<?php
/*

parent Keyword
Kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjut kita override di class child.
Untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent.
Sederhananya, parent digunakan untuk mengakses class parent.

Look at:
• Shape.php

*/

require_once __DIR__ . "/Data/Shape.php";

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;

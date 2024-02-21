<?php
/*

Regular Expression
PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman Perl.
Regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string menggunakan pole tertentu.
More detail: https://www.php.net/manual/en/pcre.pattern.php

Function Regular Expression
preg_match($pattern, $subject)                      Digunakan untuk mencari match pattern
preg_match_all($pattern, $subject)
preg_replace($pattern, $replacement, $subject)      Digunakan untuk mereplace semua pattern dengan replacement
preg_split($pattern, $subject)                      Digunakan untuk memotong dengan pattern menjadi array

*/

$matches = [];
$result = (bool)preg_match_all("/john|doe/i", "John Doe", $matches);                # Regular Expression Match
var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat");     # Regular Expression Replace
var_dump($result);

$result = preg_split("/[\s,-]/", "John Doe");                                       # Regular Expression Split
var_dump($result);

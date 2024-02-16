<?php
/* 

Arrow Function alternative dari Anonymous Function untuk yang lebih sederhana penggunaannya.
Keduanya bisa dikatakan sama, namun keunggulan dari Arrow Function adalah dia dapat mengakses global variabel
tanpa menyebut secara eksplisit variable yang ingin diakses seperti apa yang dilakukan Anonymous Function dengan 
menggunakan kata kunci "use ($varaible1, $variable2)"
Pembuatan Arrow Function menggunakan kata kunci "fn"

*/

$firstName = "John";
$lastName = "Doe";
$sayHello = fn() => "Hello $firstName $lastName" . PHP_EOL;
echo $sayHello();
// Output: Hello John Doe

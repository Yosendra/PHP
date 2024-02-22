<?php
/*

Named Argument
Biasanya saat kita memanggil function, maka kita harus memasukan argument atau parameter sesuai dengan posisinya.
Dengan kemampuan named argument, kita bisa memasukan argument atau parameter tanpa harus mengikuti posisinya.
Penggunaan named argument harus disebutkan nama argument atau parameternya.
More Detail: https://wiki.php.net/rfc/named_params

*/

function sayHello(string $first, string $last)      # definisi fungsi sayHello
{
    echo "Hello $first $last" . PHP_EOL;
}

sayHello("John", "Doe");                            # tanpa named argument, posisi argument harus sesaui dengan definisi

sayHello(first: "John", last: "Doe");               # dengan named argument, posisi bisa sembarang
sayHello(last: "Doe", first: "John");               # asal menyebut nama argumentnya
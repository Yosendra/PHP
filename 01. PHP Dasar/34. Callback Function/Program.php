<?php
/* 

Callback Function
Callback adalah mekanisme sebuah function memanggil funciton lainnya sesuai dengan yang diberikan argument.
Di PHP terdapat cara untuk mendefinisikan suatu argument bertipe callback function yaitu menggunakan tipe callable
Untuk memanggil callback function tersebut, kita menggunakan function call_user_func(callable, arguments)

*/

function sayHello(string $name, callable $filter){      // perthatikan callable
    $finalName = call_user_func($filter, $name);        // perthatikan call_user_func
    echo "Hello $finalName" . PHP_EOL;
}
sayHello("John", fn($name) => strtoupper($name));       // tipe callable bisa menerima arrow function
sayHello("John", "strtoupper");                         // tipe callable bisa menerima nama function sebagai string
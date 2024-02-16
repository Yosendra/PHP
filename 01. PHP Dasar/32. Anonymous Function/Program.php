<?php
/* 

Anonymous Function adalah function tanpa nama, di PHP disebut dengan Closure.
Biasanya digunakan sebagai argument atau value di variable.
Anonymous Function membuat kita bisa mengirim function sebagai argument di function lainnya.

Mengakases variable di luar Closure (Anonymous Function)
Secara default anonymous function tidak bisa mengakses variable yang terdapat di luar function
Jika kita ingin menggunakan variable yang terdapat di luar anonymous function, kita perlu secara
eksplisit menyebutkannya menggunakan kata kunci "use" lalu diikuti variable-variable yang ingin digunakan.

*/

$sayHello = function (string $name){        // meng-assign function tanpa nama ke dalam variable $sayHello
    echo "Hello $name" . PHP_EOL;
};
$sayHello("John");
// Output: Hello John

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye, $finalName" . PHP_EOL;
}
sayGoodBye("John", function(string $name){      // perahatikan di argument kedua, kita melewatkan Anonymous Function
    return strtoupper($name);
});
// Output: Good Bye, JOHN

$filterFunction = function(string $name){
    return strtoupper($name);
};
sayGoodBye("May", $filterFunction);
// Output: Good Bye, MAY


$firstName = "John";
$lastName = "Doe";
$sayHelloJohn = function() use ($firstName, $lastName) {        // perhatikan di sini
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloJohn();
// Output : Hello John Doe

$firstName = "Alex";
$lastName = "Carpenter";
$sayHelloJohn();
// Output : Hello John Doe
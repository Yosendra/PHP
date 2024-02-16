<?php
/* 

Function Argument
Kita bisa mengirim informasi ke function yang sedang dipanggil dengan Function Argument.
Pada pendefinisian function, kita perlu mendefinisikan parameternya.
Parameter diletakan didalam tanda kurung yang terdapat setelah nama function.

Default Argument Value
Kita bisa menetapkan nilai default dari function parameter, ini berguna ketika function dipanggil namun tidak diberikan argument

Type Declaration pada parameter function
Function akan mengecek argument yang dilewatkan ke dalam function apakah sesuai dengan tipe yang ditetapkan
Jika tidak sesuai, maka akan terjadi error

Valid Types
Class / Interface       Parameter harus tipe Class/Interface
self                    Parameter harus sama dengan Class dimana function ini dibuat
array                   Parameter harus array
callable                Parameter harus callable
bool                    Parameter harus boolean
float                   Parameter harus floating point
int                     Parameter harus integer number
string                  Parameter harus string
iterable                Parameter harus array atau tipe Traversable
object                  Parameter harus sebuah object

Variable-length Argument List
Kemampuan dimana sebuah paramater mampu menerima banyak value.
Secara otomatis parameter tersebut akan menjadi array, namun kita tidak perlu manual mengirim array ke functionnya.
Parameter ini hanya boleh diletakan di posisi terakhir.
Untuk membuat parameter ini, gunakan tanda ...(titik 3 kali) sebelum nama parameter.

*/

function sayHello($name){               // $name adalah parameter function
    echo "Hello $name" . PHP_EOL;
}
sayHello("John");                       // "John" adalah argument function
// Output: Hello John
sayHello("Delta");
// Output: Hello Delta

function sayHello2($name="Guest"){      // memberikan default argument value pada parameter $name
    echo "Hello $name" . PHP_EOL;
}
sayHello2();                            // argument tidak diberikan
// Output: Hello Guest

function sum(int $a, int $b){           // Batasi tipe data dari argument yang dapat diterima oleh function
    $total = $a + $b;
    echo "Total $a + $b = $total" . PHP_EOL;
}
sum(1, 2);
sum("1", "1");  // masih bisa dikonversi

function sumAll(...$values) {           // Variable-length Argument List
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}
sumAll(1, 2, 3, 4, 5);                  // Cara memberikan argumennya seperti berikut
$array = [1, 2, 3, 4, 5];
sumAll(...$array);                      // Jika argument sudah terlanjur dalam bentuk array (sepereti spread operator pada Javascript)
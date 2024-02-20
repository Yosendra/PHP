<?php
/*

Overloading
Konsep overloading di PHP itu berbeda dengan konsep overloading pada static type seperti C# dan Java.
Di PHP tidak bisa membuat function dengan nama yang sama.
Overloading di PHP adalah kemampuan membuat properties dan function secara dinamis.

Properties Overloading
Saat kita mengakses properties, maka secra otomatis properties akan diakses.
Namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadika itu error.
PHP akan melakukan fallback ke magic function.
Dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic function tersebut.

Magic Function untuk Properties Overloading
__set($name, $value): void          Dieksekusi ketika mengubah properties yang tidak tersedia
__get($name): mixed                 Dieksekusi ketika mengakses properties yang tidak tersedia
__isset($name): bool                Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
__unset($name): void                Dieksekusi ketika menggunakan unset() properties yang tidak tersedia

Function Overloading
Saat kita mengakses function, maka secra otomatis function akan diakses.
Namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadika itu error.
PHP akan melakukan fallback ke magic function.
Dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic function tersebut.

Magic Function untuk Function Overloading
__call($name, $arguments): mixed                    Dieksekusi ketika memanggil function yang tidak tersedia
static __callStatic($name, $arguments): mixed       Dieksekusi ketika memanggil static function yang tidak tersedia

*/

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($method, $args)
    {
        $join = join(", ", $args);
        echo "Call function $method with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($method, $args)
    {
        $join = join(", ", $args);
        echo "Call static function $method with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();

$zero->name = "John";           # properti 'name' tidak didefinisikan di class Zero, eksekusi fallback ke function __set()
echo $zero->name . PHP_EOL;     # properti 'name' tidak ada, eksekusi fallback ke function __get()

$zero->sayHello("Doe");         # invoke method sayHello yang tidak ada, fallback ke __call
Zero::sayHello("Doe");          # invoke static function sayHello yang tidak ada, fallback ke __callStatic

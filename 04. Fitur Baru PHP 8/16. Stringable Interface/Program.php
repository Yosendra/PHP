<?php
/*

Stringable Interface
Di PHP 8 diperkenalkan interface baru bernama Stringable.
Jika melakukan override magic function __toString(), maka secara otomatis class kita akan
mengimplement interface Stringable secara otomatis.
Detail: https://wiki.php.net/rfc/stringable

*/

# Jika function butuh argument yang ada magic method _toString(), kita bisa
# menuliskan tipe Stringable di tipe data parameter functionnya.
function sayHello(Stringable $stringable)
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}
class Person
{
    function __toString(): string       # wajib mengoverride jika ingin Person sesuai dengan interface Stringable
    {
        return "Person";
    }
}
sayHello(new Person());
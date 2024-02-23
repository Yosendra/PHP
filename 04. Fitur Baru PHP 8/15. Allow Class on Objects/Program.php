<?php
/*

Allow ::class on Objects
Di PHP 7 untuk mendapatkan nama class sebuah object kita perlu menggunakan NamaClass::class atau get_class($object).
Di PHP 8 kita bisa langsung mengambil nama class dari $object::class secara langsung.
Detail: https://wiki.php.net/rfc/class_name_literal_on_object

*/

class Login
{
    
}
$login = new Login();
var_dump($login::class);        # dengan ::class
var_dump(get_class($login));
var_dump(Login::class);

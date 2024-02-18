<?php

class Person
{
    // Ini Properties
    var string $name;                     // type declaration pada properties
    var $address;
    var string $country = "Indonesia";    // property default value
    var ?int $age = null;                 // nullable type. Perhatikan simbol ? di depan tipe data
}
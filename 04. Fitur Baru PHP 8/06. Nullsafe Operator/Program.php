<?php
/* 

Nullsafe Operator
Ketika ingin mengakses sesautu dari sebuah object yang bisa memungkinkan nilai null, maka akan 
melakukan pengecekan apakah object tersebut null atau tidak, jika tidak baru akses objeect tersebut.
Dengan nullsafe operator, kita tidak perlu melakukan itu, kita hanya perlu menggunakan karakter ?, 
secara otomatis PHP akan melanjutkan pengecekan null tersebut.
More detail: https://wiki.php.net/rfc/nullsafe_operator

*/

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;           # nullable class type
}

function getCountry(?User $user): ?string           
{                                                   
    if ($user != null):                             # tanpa nullsafe operator. Kita perlu melakukan pengecekan setiap nilai
        if ($user->address != null)                 # apakah null dengan if statement sebelum mengakses country.
            return $user->address->country;
    endif;

    return null;
}
echo getCountry(null) . PHP_EOL;

function getCountryV2(?User $user): ?string
{
    return $user?->address?->country;               # dengan nullsafe operator. Lebih ringkas, tanpa if statement
}                                                   # apa bila $user adalah null, maka return null dari function
echo getCountryV2(null) . PHP_EOL;                  # apa bila $user ada, tapi $address bernilai null, maka return null dari function

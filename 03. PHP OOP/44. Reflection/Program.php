<?php
/*

Reflection
Reflection adalah kemampuan membaca struktur kode pada saat aplikasi sedang berjalan.
Reflection cocok digunakan untuk membuat framework atau helper di dalam project.
More detail: https://www.php.net/manual/en/book.reflection.php

Studi Kasus: Membuat Validasi Framework
Sekarang kita akan coba melakukan studi kasus menggunakan Reflection.
Kita akan membuat validation framework menggunakan reflection.
Validation framework-nya cukup sederhana, kita hanya akan mengecek apakah properties bernilai
null atau tidak, kalo null atau belum di set, kita akan throw Validation Exception.
Tanpa reflection biasanya akan melakukan hal ini kita butuh pengecekan secara manual.

*/

class ValidationException extends Exception {}
class LoginRequest
{
    public ?string $username;
    public ?string $password;
}
class ValidationUtil
{
    public static function validate(LoginRequest $loginRequest)         # pembuatan fungsi ini akan berulang untuk setiap tipe object berbeda yang
    {                                                                   # ingin divalidasi secara manual tanpa reflection. Misal validasi RegisterUserRequest, dan lainnya
        if (!isset($loginRequest->username))
            throw new ValidationException("Username is not set");
        else if (!isset($loginRequest->password))
            throw new ValidationException("Password is not set");
        else if (is_null($loginRequest->username))
            throw new ValidationException("Username is null");
        else if (is_null($loginRequest->password))
            throw new ValidationException("Password is null");
    }

    public static function validateReflection($request)                 # menggunakan reflection, cukup gunakan fungsi ini untuk validasi setiap data object yang ingin divalidasi.
    {
        $reflection = new ReflectionClass($request);                    # untuk mengetahui nama class dari object $request, mampu membaca struktur dari class tersebut
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);    # dapatkan semua property yang public
        foreach ($properties as $property):
            if (!$property->isInitialized($request))
                throw new ValidationException("$property->name is not set");
            else if (is_null($property->getValue($request)))
                throw new ValidationException("$property->name is null");
        endforeach;
    }
}
class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$request = new LoginRequest();
$register = new RegisterUserRequest();

ValidationUtil::validate($request);                     # hanya dapat digunakan untuk validasi object LoginRequest

ValidationUtil::validateReflection($request);           # validateReflection() bisa memvalidasi untuk object LoginRequest maupun RegisterUserRequest
ValidationUtil::validateReflection($register);
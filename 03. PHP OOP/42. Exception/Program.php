<?php
/*

Exception
Saat kita membuat aplikasi, kita tidak akan terhindar dengan yang namanya error.
Di PHP, error direpresenstasikan dengan istilah exception dan semua direpresentasikan dalam bentuk class Exception.
Kita bisa menggunakan class Exception sendiri atau menggunakan yang sudah disediakan oleh PHP.
Jika kita ingin membuat exception, maka kita harus membuat class yang implement interface Throwable atau 
turunan-turunannya. (Tidak disarankan membuat kelas custom Exception dengan implement interface Throwable, pilih mewarisi dari
kelas Exception)

Membuat Exception
Exception biasanya terjadi di function.
Di dalam kode program kita, untuk membuat exception kita cukup menggunakan kata kunci throw diikuti dengan object exception-nya.

Try Catch
Saat kita memanggil sebuah function yang bisa menyebabkan exception, maka kita disarankan menggunakan try-catch statement.
Try-Catch digunakan untuk menangkap exception yang terjadi. Jika tidak ditangkap, program secara otomatis akan berhenti.
Blok try adalah tempat memanggil method yang bisa menyebabkan exception, dan di blok catch adalah tempat dimana kita melakukan
sesuatu terhadap exception yang terjadi.

Finally Keyword
Dalam try-catch kita bisa menambahkan block finally.
Blok finally ini adalah blok dimana akan selalu dieksekusi baik terjadi exception ataupun tidak.
Ini sangat cocok ketika ingin melakukan sesuatu, tidak peduli sukses ataupun gagal, misal di blok try
kita ingin membaca file, di blok catch kita akan tangkap jika terjadi error, dan di blok finally,
error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut biar tidak menggantung di memory.

Debug Exception
Exception di PHP memiliki sebuah function bernama getTrace().
Function getTrace() berisikan informasi dari exception yang terjadi seperti lokasi file,
baris ke berapa, function mana sampai argument yang dikirim di function tersebut apa.
Ini cocok untuk kita jika ingin mendebug ketika terjadi exception.

*/

class ValidationException extends Exception {}                           # membuat custom exception dengan mewarisi kelas Exception
class LoginRequest
{
    public string $username;
    public string $password;
}
function validateLoginRequest(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->username))
        throw new ValidationException("Username is null");              # keyword 'throw' untuk memlempar exception
    else if (!isset($loginRequest->password))
        throw new ValidationException("Password is null");
    else if ($loginRequest->username == "")
        throw new Exception("Username is empty");
    else if ($loginRequest->password == "")
        throw new Exception("Password is empty");

    echo "VALID" . PHP_EOL;
}

$login = new LoginRequest();
$login->username = "";                                      # properti ini akan kena validasi
$login->password = "PASSWORD";                              

try                                                         # blok try
{
    validateLoginRequest($login);
}
catch (ValidationException $ex)                             # blok catch, tangkap exception yang terjadi di dalam validateLoginRequest()
{
    echo "Error: {$ex->getMessage()}" . PHP_EOL;            # cetak pesan exception
    var_dump($ex->getTrace());                              # getTrace()
}
catch (Exception $ex)                                       # kita dapat menangkap lebih dari satu jenis exception dengan menambah blok catch
{
    echo "Error: {$ex->getMessage()}" . PHP_EOL;
    var_dump($ex->getTrace());
    echo $ex->getTraceAsString() . PHP_EOL;                 # cetak kembalian getTrace() sebagai string
}
catch (Exception | ValidationException $ex)                 # kita dapat menggabungkan dua atau lebih tipe exception di satu blok catch dengan simbol |
{
    echo "Error: {$ex->getMessage()}" . PHP_EOL;
    var_dump($ex->getTrace());
}
finally                                                     # blok finally akan selau dieksekusi, tidak peduli terjadi exception atau tidak
{
    echo "ERROR ATAU TIDAK, STATEMENT INI AKAN SELALU DIEKSEKUSI" . PHP_EOL;
}


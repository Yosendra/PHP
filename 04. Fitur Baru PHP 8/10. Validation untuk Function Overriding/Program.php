<?php
/*

Validation untuk Function Overriding
Di PHP 8 sekarang terdapat validasi ketika mengimplementasikan abstract function di class dari trait.
Di PHP 7, saat kita mengubah seperti parameter dan return valuenya, hal itu menjadi masalah.
Namun di PHP 8, jika kita mengubah implementasinya dari abstract functionnya, maka otomatis akan error.
Detail: https://wiki.php.net/rfc/abstract_trait_method_validation

Validasi di Function Overriding
Sebelumnya kita tahu bahwa melakukan override dengan mengubah signature function hanya akan menimbulkan warning.
Di PHP 8 hal tersebut akan menimbulkan error.
Sehingga kita tidak bisa mengubah signature dari function yang kita override seperti mengubah argument atau
return value.
Detail: https://wiki.php.net/rfc/lsp_errors

Private Function Overriding
Di PHP 7 saat kita membuat function tapi ternyata di parentnya terdapat function dengan nama yang sama, walaupun private,
hal itu dianggap overriding.
Padahal sudah jelas bahwa private method tidak bisa diakses oleh turunannya.
Di PHP 8 sekarang private function tidak ada hubungan lagi dengan child class, sehingga kita bebas membuat function dengan
nama yang sama walaupun di parent ada function private dengan nama yang sama.
Detail: https://wiki.php.net/rfc/lsp_errors

*/

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}
class SampleClass
{
    use SampleTrait;

    public function sampleFunction(int $name): int          # Error karena type data dari parameter dan return value tidak sesuai dengan
    {                                                       # yang didefinisikan pada abstract function

    }
}


class ParentClass
{
    public function method(array $a){}
}
class ChildClass extends ParentClass
{
    public function method(int $a){}                        # Error, tipe data parameter tidak sesuai
}


class Manager
{
    private function test(): void
    {}
}
class ViceManager extends Manager
{
    public function test(string $name) : string             # Tidak ada kaitan dengan private method di parent class
    {
        return "ViceManager";
    }
}
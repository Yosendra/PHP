<?php
/*

static Keyword
'static' adalah keyword yang dapat digunakan pada properties dan function.
Static properties dan static function berarti ia sudah jadi milik class, tidak
bisa diakses melalui instance.
Untuk mengakses static properties dan static function, gunakan operator ::
Static function tidak bisa mengakses method (function pada class) karena method 
menempel pada class instance sedangkan static function tidak.

*/

class MathHelper
{
    public static string $name = "MathHelper";          # membuat static property

    public static function sum(int ...$numbers): int    # membuat static function
    {
        $total = 0;
        
        foreach ($numbers as $value)
            $total += $value;
        
        return $total;
    }
}

echo MathHelper::$name . PHP_EOL;                       # akses static property dengan operator ::
echo MathHelper::sum(1,2,3,4,5) . PHP_EOL;              # akses static function dengan operator ::
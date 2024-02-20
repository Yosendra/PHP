<?php
/*

Anonymous Class
Anonymous class atau kelas tanpa nama adalah kemampuan mendeklarasikan class sekaligus
menginstansiasi objectnya secara langsung.
Anonymous class cocok ketika kita berhadapan dengan kasus membuat implementasi interface
atau abstract class sederhana tanpa harus membuat implementasi classnya.

Constructor di Anonymous Class
Anonymous Class juga mendukung constructor.

*/

interface HelloWorld
{
    function sayHello(): void;
}

//$helloWorld = new class implements HelloWorld {                            # Anonymous Class tanpa constructor
$helloWorld = new class("Anonymous Class") implements HelloWorld {           # Anonymous Class dengan constructor
    private string $name;

    public function __construct(string $name) 
    {
        $this->name = $name;
    }
    
    function sayHello(): void
    {
        echo "Hello Anonymous Class" . PHP_EOL;
    }
};

$helloWorld->sayHello();

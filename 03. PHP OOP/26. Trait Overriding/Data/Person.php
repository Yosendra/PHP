<?php

require_once __DIR__ . "/../Trait/SayHello.php";
require_once __DIR__ . "/../Trait/SayGoodBye.php";
require_once __DIR__ . "/../Trait/HasName.php";
require_once __DIR__ . "/../Trait/CanRun.php";

class Person
{
    use SayHello, SayGoodBye, HasName, CanRun {
        hello as private;                                    # override trait visibility
        goodBye as private;
    }

    public function run(): void                              # override abastract method dari trait CanRun
    {
        echo "Person {$this->name} is running" . PHP_EOL;
    }

    public function hello(?string $name = null): void        # override method milik trait SayHello 
    {
        echo "Override trait SayGoodBye" . PHP_EOL;
    }

    public function goodBye(?string $name = null): void      # override method milik trait SayGoodBye 
    {
        echo "Override trait SayGoodBye" . PHP_EOL;
    }
}
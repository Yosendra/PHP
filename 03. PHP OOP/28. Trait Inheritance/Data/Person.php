<?php

require_once __DIR__ . "/../Trait/All.php";

class Person
{
    use All;                    # gunakan trait All hasil gabungan seluruh trait

    public function run(): void
    {
        echo "Person {$this->name} is running" . PHP_EOL;
    }

    public function hello(?string $name = null): void
    {
        echo "Override trait SayGoodBye" . PHP_EOL;
    }

    public function goodBye(?string $name = null): void
    {
        echo "Override trait SayGoodBye" . PHP_EOL;
    }
}
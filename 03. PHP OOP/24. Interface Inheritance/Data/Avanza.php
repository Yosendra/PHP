<?php

require_once __DIR__ . "/../Interface/ICar.php";

class Avanza implements ICar, IIsMaintenance        # class mengimplement lebih dari satu interface
{
    function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    function getBrand(): string         # method dari IHasBrand yang diwarisi oleh ICar
    {                                   # wajib dioverride di class ini
        return "Toyota";
    }

    function isMaintenance(): bool      # override IIsMaintenance contract
    {
        return false;
    }
}
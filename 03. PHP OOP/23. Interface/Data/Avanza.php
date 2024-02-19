<?php

require_once __DIR__ . "/../Interface/ICar.php";

class Avanza implements ICar            # mengimplement interface ICar, 
{                                       # wajib mengoverride seluruh method signatur pada ICar
    
    function drive(): void              # override drive() method dari interface
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    function getTire(): int             # override getTire() method dari interface
    {
        return 4;
    }
}
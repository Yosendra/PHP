<?php

namespace Helper;

class InputHelper
{
    public static function input(string $info): string
    {
        echo "$info : ";
        $result = trim(fgets(STDIN));
        return $result;
    }
}
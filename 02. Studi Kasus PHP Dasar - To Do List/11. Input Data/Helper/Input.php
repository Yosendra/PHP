<?php

function input(string $info): string 
{
    echo "$info : ";
    $result = fgets(STDIN);     //STDIN : Standard Input from Keyboard
    return $result;
}
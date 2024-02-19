<?php

require_once __DIR__ . "/../Trait/SayHello.php";
require_once __DIR__ . "/../Trait/SayGoodBye.php";
require_once __DIR__ . "/../Trait/HasName.php";

class Person
{
    use SayHello, SayGoodBye, HasName;       # gunakan trait ke dalam class
}
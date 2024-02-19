<?php

require_once __DIR__ . "/SayGoodBye.php";
require_once __DIR__ . "/SayHello.php";
require_once __DIR__ . "/HasName.php";
require_once __DIR__ . "/CanRun.php";

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun;              # menggunakan trait di dalam trait
}
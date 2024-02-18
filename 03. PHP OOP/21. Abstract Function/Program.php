<?php
/*

Abstract Function
Saat membuat abstract class, kita bisa membuat absract function juga di dalam abstract class tersebut.
Abstract function tidak boleh memuat block function dan tidak boleh bermodifier private.
Abstract function wajib dioverride di child class. 

Look at:
• Animal.php

*/

require_once __DIR__ . "/Data/Animal.php";

$cat = new Cat();
$cat->name = "Kitty";
$cat->run();
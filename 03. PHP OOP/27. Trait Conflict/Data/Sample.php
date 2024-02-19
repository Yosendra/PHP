<?php

require_once __DIR__ . "/../Trait/TraitA.php";
require_once __DIR__ . "/../Trait/TraitB.php";

class Sample
{
    //use TraitA, TraitB;                       # conflict karena terdapat nama method yang sama dari kedua trait
    
    use TraitA, TraitB {        
        TraitA::doA insteadof TraitB;           # gunakan doA() milik TraitA kesampingkan punya TraitB
        TraitB::doB insteadof TraitA;           # gunakan doB() milik TraitB kesampingkan punya TraitA
    }
}
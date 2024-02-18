<?php

abstract class Location             # abstract class
{
    public string $name;
}

class City extends Location {}
class Province extends Location {}
class Country extends Location {}
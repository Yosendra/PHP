<?php

class Shape
{
    function getCorner(): int
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    function getCorner(): int           # override method parent
    {
        return 4;
    }

    function getParentCorner(): int
    {
        return parent::getCorner();     # mengakses getCorner() milik parent dengan keyword 'parent'
    }
}
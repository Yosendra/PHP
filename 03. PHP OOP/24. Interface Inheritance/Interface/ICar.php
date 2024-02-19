<?php

interface IHasBrand
{
    function getBrand(): string;
}

interface IIsMaintenance
{
    function isMaintenance(): bool;
}

interface ICar extends IHasBrand                # interface mewarisi interface lainnya
{
    function drive(): void;
    function getTire(): int;
}
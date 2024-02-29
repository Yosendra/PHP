<?php

namespace BelajarPHPUnit;

interface IProductRepository
{
    function save(Product $product) : Product;
    function delete(Product $product) : void;
    function findById(string $id) : ?Product;
    function findAll() : Product;
}
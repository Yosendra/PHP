<?php
/*

Visibility
Visibility / Access Modifier adalah kemampuan properties, function, dan constant dapat dimana saja.
Secara default properties, function, dan constant yang kita buat di dalam class bisa diakses dari mana saja,
atau artinya dia adalah public.
Selain public, masih ada beberapa visibility lainnya.
Secara default kata kunci var untuk properties sifatnya adalah public.

-Modifier       -Class  -Subclass  -World
public          Y       Y          Y
protected       Y       Y          N
private         Y       N          N

Look at:
• Product.php

*/

require_once __DIR__ . "/Data/Product.php";

$product = new Product("HP", 1_000_000);

// error, name dan price bersifat private
// $product->name;
// $product->price;

echo $product->getName() . PHP_EOL;
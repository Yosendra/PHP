<?php
/*

Constructor Property Promotion
Kadang kita sering sekali membuat property sekaligus mengisi property tersebut menggunakan constructor.
Sekarang kita bisa otomatis langsung membuat property dengan via constructor.
More details: https://wiki.php.net/rfc/constructor_promotion

*/

class Product                                   # tanpa Constructor Property Promotion
{
    public string $id;
    public string $name;
    public int $price;
    public int $quantity;

    public function __construct(string $id, string $name, int $price, int $quantity) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

class Product_With_ConstructorPropertyPromotion
{
    public function __construct(                        # dengan Constructor Property Promotion, lebih ringkas
        public string $id,
        public string $name,
        public int $price,
        public int $quantity,
        private bool $expensive = false)
    {}
}

$product1 = new Product(id: "1", name: "Mie Ayam", price: 5000, quantity: 1);
var_dump($product1);

$product2 = new Product_With_ConstructorPropertyPromotion(id: "1", name: "Mie Ayam", price: 5000, quantity: 1);
var_dump($product1);
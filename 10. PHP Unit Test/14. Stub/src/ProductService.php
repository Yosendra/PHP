<?php

namespace BelajarPHPUnit;

class ProductService
{
    public function __construct(private IProductRepository $productRepository) {}

    public function register(Product $product) : Product 
    {
        $productId = $product->getId();
        $existingProduct = $this->productRepository->findById($productId);
        if ($existingProduct != null)
            throw new \Exception("Product is already exist");

        return $this->productRepository->save($product);
    }
}
<?php

namespace BelajarPHPUnit;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ProductServiceTest extends TestCase
{
    private IProductRepository $productRepository;
    private ProductService $productService;

    protected function setUp() : void 
    {
        $this->productRepository = self::createStub(IProductRepository::class);         # membuat stub
        $this->productService = new ProductService($this->productRepository);           # mempassing stub ke constructornya
    }

    public function testStub() 
    {
        $product = new Product();
        $product->setId("1");

        $this->productRepository->method("findById")->willReturn($product);             # konfigurasi kembalian dari findById

        $result = $this->productRepository->findById("1");                              # akan mengembalikan $product sesuai konfigurasi di atas

        Assert::assertSame($product, $result);                                          # true
    }

    public function testStubMap() 
    {
        $product1 = new Product();
        $product1->setId("1");

        $product2 = new Product();
        $product2->setId("2");

        $map = [
            ["1", $product1],
            ["2", $product2],
        ];

        $this->productRepository->method("findById")->willReturnMap($map);  # konfigurasi kembalian dari findById, perhatikan kita menggunakan willReturnMap()

        $result1 = $this->productRepository->findById("1");                 # akan mengembalikan $product1
        $result2 = $this->productRepository->findById("2");                 # akan mengembalikan $product2

        Assert::assertSame($product1, $result1);                            # true
        Assert::assertSame($product2, $result2);                            # true
    }

    public function testStubCallback() 
    {
        $this->productRepository->method("findById")
            ->willReturnCallback(function (string $id){                     # willReturnCallback()
                $product = new Product();
                $product->setId($id);
                return $product;
            });

        $idProduct1 = $this->productRepository->findById("1")->getId();
        $idProduct2 = $this->productRepository->findById("2")->getId();

        Assert::assertSame("1", $idProduct1);
        Assert::assertSame("2", $idProduct2);
    }

    public function testRegister() 
    {
        $this->productRepository->method("findById")->willReturn(null);
        $this->productRepository->method("save")->willReturnArgument(0);

        $product = new Product();
        $product->setId("1");
        $product->setName("Contoh");

        $result = $this->productService->register($product);

        Assert::assertEquals($product->getId(), $result->getId());
        Assert::assertEquals($product->getName(), $result->getName());
    }

    public function testRegisterFailed() 
    {
        $this->expectException(\Exception::class);

        $productExist = new Product();
        $productExist->setId("1");
        $productExist->setName("Contoh");
        $this->productRepository->method("findById")->willReturn($productExist);

        $this->productService->register($productExist);
    }
}
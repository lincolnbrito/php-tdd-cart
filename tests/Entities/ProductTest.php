<?php

namespace LincolnBrito\Cart\Tests\Entities;          

use PHPUnit\Framework\TestCase;
use LincolnBrito\Cart\Entities\Product;
use LincolnBrito\Cart\Entities\ProductInterface;

class ProductTest extends TestCase 
{
    public function testProductType()
    {
        $product = new Product();

        $this->assertInstanceOf(ProductInterface::class, $product);
    }

    public function testProductName()
    {
        $product = new Product();
        $product->setName("Product 1");

        $this->assertEquals("Product 1", $product->getName());
    }
}
<?php

namespace LincolnBrito\Cart\Tests\Entities;          

use PHPUnit\Framework\TestCase;
use LincolnBrito\Cart\Entities\Product;

class ProductTest extends TestCase 
{
    public function testProductType()
    {
        $product = new Product();

        $this->assertInstanceOf(ProductInterface::class, $product);
    }
}
<?php

namespace LincolnBrito\Cart\Tests\Entities;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase 
{
    public function testProductType()
    {
        $product = new Product();

        $this->assertInstanceOf(ProductInterface::class, $product);
    }
}
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

    public function testProductDescription()
    {
        $product = new Product();
        $product->setDescription("Desc 1");

        $this->assertEquals("Desc 1", $product->getDescription());
    }

    public function testProductPrice()
    {
        $product = new Product();
        $product->setPrice(10);

        $this->assertEquals(10, $product->getPrice());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testPriceValueWhenANotNumericGiven()
    {
        $product = new Product();
        $product->setPrice("asdasdasd");
    }
}
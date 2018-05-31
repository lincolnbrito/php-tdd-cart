<?php
namespace LincolnBrito\Cart\Tests\Entities;          

use PHPUnit\Framework\TestCase;
use LincolnBrito\Cart\Entities\Order;
use LincolnBrito\Cart\Entities\Product;

class OrderTest extends TestCase
{
    public function testGetProductList()
    {
        $product = new Product();
        $product->setName("Product 1");
        $product->setDescription("Desc 1");
        $product->setPrice(10);

        $product2 = new Product();
        $product2->setName("Product 2");
        $product2->setDescription("Desc 2");
        $product2->setPrice(20);

        $order = new Order();
        $order->addProduct($product);
        $order->addProduct($product2);

        $products = new \ArrayObject([$product, $product2]);
        $this->assertEquals($products, $order->getProducts());
    }

    public function testGetTotal()
    {        
        $product = new Product();
        $product->setName("Product 1");
        $product->setDescription("Desc 1");
        $product->setPrice(10);

        $product2 = new Product();
        $product2->setName("Product 2");
        $product2->setDescription("Desc 2");
        $product2->setPrice(20);

        $order = new Order();
        $order->addProduct($product);
        $order->addProduct($product2);

        $total = 30;
        $this->assertEquals($total, $order->getTotal());
    }
}
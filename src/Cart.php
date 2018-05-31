<?php
namespace LincolnBrito\Cart;

use LincolnBrito\Cart\Entities\ProductInterface;

class Cart
{
    protected $products;

    public function __construct(){
        $this->products = new \ArrayObject();
    }

     /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param \ArrayObject $product
     */
    public function addProduct(ProductInterface $product)
    {
        $this->products->append($product);
    }

    /**
     * @return int
     */
    public function getTotal():int
    {
        $total = 0;

        foreach($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }
}
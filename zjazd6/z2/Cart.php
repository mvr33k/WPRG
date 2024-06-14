<?php

namespace z2;


//include 'Product.php';
require_once 'Product.php';

class Cart
{
    public function __construct()
    {
        $this->products = array();
    }

    private $products;

    public function addProduct(Product $product)
    {
        array_push($this->products, $product);
    }

    public function removeProduct()
    {
        array_pop($this->products);
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total = +$product->getPrice * $product->getQuantity;
        }
        return $total;
    }

    public function __toString()
    {
        $tostring = "Products in cart: \n";
        foreach ($this->products as $product) {
            $tostring .= $product . "\n";
        }
        $tostring .= "Total price: " . $this->getTotal();
        return $tostring;
    }
}


$product1 = new Product("Laptop", 1500, 1);
$product2 = new Product("Mouse", 50, 2);
$product3 = new Product("Headphones", 200, 5);


$cart = new Cart();
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);

echo $cart;

$cart->removeProduct($product3);

echo $cart . "\n";
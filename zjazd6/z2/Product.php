<?php

namespace z2;

class Product
{
    public function __construct($name, $price, $quantity)
    {
        $this->name=$name;
        $this->price=$price;
        $this->quantity=$quantity;
    }

    private $name;
    private $price;
    private $quantity;


    public function __toString() {
        return get_class($this)
            . " name => " . $this->name
            . ", "
            . " price => " . $this->price
            . ", "
            . " quantity => " . $this->quantity;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}


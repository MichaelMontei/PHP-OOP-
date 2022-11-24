<?php


class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency($currencySymbol, $divisor)
    {
        return $currencySymbol . $this->price / $divisor;
    }
}

$product = new Product("soap", 100);
print $product->name . PHP_EOL;
print $product->price . PHP_EOL;

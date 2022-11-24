<?php

class Product
{
    public $name = 'soap';
    public $price = 100;

    public function priceAsCurrency($currencySymbol, $divisor)
    {
        return $currencySymbol . $this->price / $divisor;
    }
}

$product = new Product();
print $product->priceAsCurrency('€', 100 );

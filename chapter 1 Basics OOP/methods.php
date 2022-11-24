<?php

class Soap
{
    public $name = 'soap';
    public $price;

    public function priceAsCurrency()
    {
        return $this->price / 100;
    }
}

$soapObject = new Soap();
$soapObject->price = 500;

$priceAsCurrency = $soapObject->priceAsCurrency();
var_dump($priceAsCurrency) .PHP_EOL;
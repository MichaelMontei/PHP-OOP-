<?php

class Product
{
    public $name = 'soap';
    public $price = 10;
}

//Instance of the Product(object)
$product = new Product();
$anotherProduct = new Product();

//using the properties of the class
$soapObject = new Product();
print $soapObject->name . "\n";

//Challenge 1
$priceObject = new Product();
print $priceObject->price. "\n";
//change the price value
$priceObject->price = 5;
//Access the (new) price
print $priceObject->price. "\n";




var_dump($product);
var_dump($anotherProduct);
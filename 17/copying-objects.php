<?php

$x = 100;
$y = & $x;

echo "Value of X: {$x} <br>";
echo "Value of Y: {$y} <br>";

$y = 500;

echo "<hr>";
echo "Value of X: {$x} <br>";
echo "Value of Y: {$y} <br>";

class Product {
	public $description;
	public $price;

	public function __construct($desc, $price) {
		$this->description = $desc;
		$this->price = $price;
	}
}

$product_1 = new Product('Dell Laptop', 150000);
$product_2 = clone $product_1;

echo "<hr>";
echo "Product 1: {$product_1->description} - {$product_1->price} <br>";
echo "Product 2: {$product_2->description} - {$product_2->price} <br>";

$product_2->description = 'HP Laptop';
$product_2->price = 100000;

echo "<hr>";
echo "Product 1: {$product_1->description} - {$product_1->price} <br>";
echo "Product 2: {$product_2->description} - {$product_2->price} <br>";


?>
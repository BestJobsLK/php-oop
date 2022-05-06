<?php 

class Product {
	var $product_name;
	var $cost_price;
	var $sales_price;

	function calculate_sales_price() {
		$this->sales_price = round($this->cost_price * 1.2, 2);
	}
}

class Computer extends Product {
	var $processor;
	var $hard_disk;
	var $ram;
}

class MobilePhone extends Computer {

}

class Garment extends Product {

}

$my_product = new Computer;
$my_product->product_name = 'Apple Macbook Air 2020';
$my_product->cost_price = 190000;
$my_product->calculate_sales_price();
$my_product->processor = 'Intel Core i3';

$my_garment = new Garment;

$my_array = get_object_vars($my_product);

echo 'Object variables for my_product';
echo '<pre>';
print_r($my_array);
echo '</pre>';

echo 'Get parent class of Garment:<br>';
echo get_parent_class($my_garment);
echo '<br><br>';

echo 'Checking if Computer is a Sublcass of Garment<br>';
if (is_subclass_of('Computer', 'Garment')) {
	echo 'Computer is a Sublcass of Garment';
} else {
	echo 'Computer is NOT a Sublcass of Garment';
}
echo '<br><br>';

echo 'Getting a list of class parents for Computer';
$parents = class_parents('MobilePhone');
echo '<pre>';
print_r($parents);
echo '</pre>';

 ?>
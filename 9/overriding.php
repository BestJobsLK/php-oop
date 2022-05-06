<?php 

class Product {
	var $product_name;
	var $cost_price;
	var $sales_price;
	var $category = 'General';

	function display() {
		echo '<b>Product Info</b><br>';
		echo 'Name of Product: <b>' . $this->product_name . '</b><br>';
		echo 'Sales Price: <b>Rs.' . $this->sales_price . '</b><br>';
		echo 'Category: ' . $this->category . '<br><br>';
	}
}

class Computer extends Product {
	var $processor;
	var $hard_disk;
	var $ram;
	var $category = 'Computer';

	function display() {
		echo '<b>Product Info</b><br>';
		echo 'Name of Product: <b>' . $this->product_name . '</b><br>';
		echo 'Sales Price: <b>Rs.' . $this->sales_price . '</b><br>';
		echo 'Processor: <b>Rs.' . $this->processor . '</b><br>';
		echo 'Hard Disk: <b>Rs.' . $this->hard_disk . '</b><br>';
		echo 'RAM: <b>Rs.' . $this->ram . '</b><br>';
		echo 'Category: ' . $this->category . '<br><br>';
	}
}

$general_product = new Product;

$general_product->product_name = 'Table Fan';
$general_product->cost_price   = 5000;
$general_product->sales_price  = 8000;

$general_product->display();

$computer = new Computer;

$computer->product_name = 'Macbook Air 2020';
$computer->cost_price   = 190000;
$computer->sales_price  = 210000;
$computer->processor = 'Intel Core i3';
$computer->hard_disk = '256GB SSD';
$computer->ram = '8GB';

$computer->display();

 ?>

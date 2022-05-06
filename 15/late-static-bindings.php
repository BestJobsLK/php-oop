<?php 

class Product {

	public static $category = 'General Product';

	public static function show_category() {
		echo 'Product Category: ' . static::$category . '<br>';
	}

}

class Computer extends Product {

	public static $category = 'Computers';

}

Product::show_category();

Computer::show_category();

 ?>
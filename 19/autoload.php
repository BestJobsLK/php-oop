<?php

function my_autoload($classname) {
	if (file_exists('classes/' . $classname . '.class.php')) {
		require_once('classes/' . $classname . '.class.php');	
	} else {
		die('Class ' . $classname . ' not found...!');
	}
	
}

spl_autoload_register('my_autoload');

$emp_1 = new Employee('Richard');

?>
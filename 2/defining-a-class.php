<?php 

class Employee {

}

$classes = get_declared_classes();

echo '<pre>';
print_r($classes);
echo '</pre>';

$class_name = 'Customer';

if (class_exists($class_name)) {
	echo 'Class ' . $class_name . ' is available.';
} else {
	echo 'Class ' . $class_name . ' is NOT available.';
}

 ?>
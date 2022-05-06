<?php 

class Employee {

	function greet() {

		return 'Ayubovan!';

	}

	function get_basic_salary() {
		//
	}

}

$employee_1 = new Employee;

echo $employee_1->greet();

$class_methods = get_class_methods($employee_1);

echo '<pre>';
print_r($class_methods);
echo '</pre>';

if (method_exists($employee_1, 'hello')) {
	echo 'Method hello exists.';
} else {
	echo 'Method hello does NOT exist.';
}

 ?>
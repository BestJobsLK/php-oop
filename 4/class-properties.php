<?php 

class Employee {

	var $emp_id = 1000;
	var $first_name;
	var $last_name;
	var $is_active = false;

}

$employee_1 = new Employee;
$employee_2 = new Employee;

$employee_1->emp_id = 100;
$employee_1->first_name = 'Michael';
$employee_1->last_name  = 'Jackson';

$employee_2->emp_id = 200;
$employee_2->first_name = 'Richard';
$employee_2->last_name  = 'Marx';

echo 'Details of Employee 1: <br>';
echo 'Employee ID: ' . $employee_1->emp_id;
echo '<br>';
echo 'Full Name: ' . $employee_1->first_name . '  ' . $employee_1->last_name;
echo '<br><br>';

echo 'Details of Employee 2: <br>';
echo 'Employee ID: ' . $employee_2->emp_id;
echo '<br>';
echo 'Full Name: ' . $employee_2->first_name . '  ' . $employee_2->last_name;
echo '<br><br>';

$class_vars = get_class_vars('Employee');

echo 'Class Variables of the Class: Employee <br>';
echo '<pre>';
print_r($class_vars);
echo '</pre>';

$object_vars = get_object_vars($employee_1);

echo 'Object Variables of the Object: employee_1 <br>';
echo '<pre>';
print_r($object_vars);
echo '</pre>';

if (property_exists($employee_2, 'last_name')) {
	echo 'Property last_name found in Object employee_2';
} else {
	echo 'Property last_name NOT found in Object employee_2';
}


 ?>

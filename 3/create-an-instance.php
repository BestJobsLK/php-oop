<?php 

class Employee {

}

class Customer {

}


$mike = new Employee;
$richard = new Employee;
$david = new Customer;

echo get_class($mike);
echo '<br>';
echo get_class($david);
echo '<br>';

if (is_a($david,'Employee')) {
	echo 'david blongs to the class: Employee';
} else {
	echo 'david does NOT blong to the class: Employee';
}

 ?>
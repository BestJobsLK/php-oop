<?php 

class Employee {

	private $basic_salary = 50000;

	public function get_basic_salary() {
		return 'Basic Salary Rs.' . $this->basic_salary . '<br>';
	}

	public function set_basic_salary($new_salary) {
		$this->basic_salary = $new_salary;
	}

}

class FullTimeEmployee extends Employee {

}

$employee_1 = new FullTimeEmployee;

$employee_1->basic_salary = 100000;

echo $employee_1->basic_salary;

echo '<br>';

echo $employee_1->get_basic_salary();

echo '<br>';

$employee_1->set_basic_salary(150000);

echo $employee_1->get_basic_salary();

 ?>
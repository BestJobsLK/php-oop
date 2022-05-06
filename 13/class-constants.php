<?php 

// echo 'PHP Version: ' . phpversion();

class Employee {

	public const EPF_RATE = 0.08;
	public $basic_salary = 50000;

	public function calc_EPF() {
		return $this->basic_salary * self::EPF_RATE;
	}

}

$emp_1 = new Employee;

echo 'EPF Rate : ' . Employee::EPF_RATE;

echo '<br>';

echo 'EPF Amount for emp_1: ' . $emp_1->calc_EPF();

 ?>
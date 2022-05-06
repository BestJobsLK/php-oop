<?php 

class Employee {

	public function calc_salary() {
		echo 'Calculate Salary...<br>';
	}

}

class SeniorEmployee extends Employee {

	public function calc_salary() {
		echo 'Add additional allowances...<br>';
		parent::calc_salary();
	}

}

$senior_emp = new SeniorEmployee;

$senior_emp->calc_salary();

 ?>
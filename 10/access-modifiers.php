<?php 

class Employee {

	public $short_name = 'Richard';
	protected $employee_no = 123;
	private $salary = 50000;

	private function employee_info() {
		echo 'EMPLOYEE INFO: <br>';
		echo 'Short Name: ' . $this->short_name . '<br>';
		echo 'Employee #: ' . $this->employee_no . '<br>';
		echo 'Salary: ' . $this->salary . '<br>';
	}

}

class FullTimeEmployee extends Employee {

	public function call_employee_info() {
		$this->employee_info();
	}

}

$emp_1 = new Employee;

// $emp_1->employee_info();

$emp_2 = new FullTimeEmployee;

$emp_2->call_employee_info();



 ?>
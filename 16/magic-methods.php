<?php 

class Employee {

	public $fname;
	public $lname;
	public $dept;
	public $salary;

	public function __construct($values) {
		$this->fname = isset($values['fname']) ? $values['fname'] : NULL;
		$this->lname = isset($values['lname']) ? $values['lname'] : NULL;
		$this->dept  = isset($values['dept']) ? $values['dept'] : NULL;
		$this->salary= isset($values['salary']) ? $values['salary'] : NULL;
	}

}

//$employee_1 = new Employee('Brian', 'Tracy', 'Human Resources', 150000);

$my_array = ['fname' => 'Brian', 'lname' => 'Tracy', 'dept' => 'Human Resources', 'salary' => 350000];

$employee_1 = new Employee($my_array);

echo '<pre>';
print_r(get_object_vars($employee_1));
echo '</pre>';

 ?>
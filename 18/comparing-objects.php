<?php

class Car {
  public $make='Toyota';
}

class Bus {
  public $make='Toyota';
}

$car1 = new Car;
$car2 = clone $car1; // copied by Value
$car3 = new Car;
$car3->make = 'Nissan';
$bus1 = new Bus;
$car4 = $car1; // copied by Reference

echo '<b>Comparing Class Instances with Similar Properties: </b><br>';
echo 'Comparision Operator (==) : ' . (($car1 == $car2) ? 'True' : 'False') . '<br>';
echo 'Identity Operator: (===) : ' . (($car1 === $car2) ? 'True' : 'False') . '<br><br>';

echo '<b>Comparing Class Instances with Different Properties: </b><br>';
echo 'Comparision Operator (==) : ' . (($car1 == $car3) ? 'True' : 'False') . '<br>';
echo 'Identity Operator: (===) : ' . (($car1 === $car3) ? 'True' : 'False') . '<br><br>';

echo '<b>Comparing Class Instances from Different Classes: </b><br>';
echo 'Comparision Operator (==) : ' . (($car1 == $bus1) ? 'True' : 'False') . '<br>';
echo 'Identity Operator: (===) : ' . (($car1 === $bus1) ? 'True' : 'False') . '<br><br>';

echo '<b>Comparing Objects Copied by Reference: </b><br>';
echo 'Comparision Operator (==) : ' . (($car1 == $car4) ? 'True' : 'False') . '<br>';
echo 'Identity Operator: (===) : ' . (($car1 === $car4) ? 'True' : 'False') . '<br><br>';

?>
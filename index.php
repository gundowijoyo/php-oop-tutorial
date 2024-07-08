<?php

require_once 'classes/Car.php';
require_once 'classes/ElectricCar.php';

$car = new Car('Toyota', 'Corolla', 'Red');
$electricCar = new ElectricCar('Tesla', 'Model 3', 'Black', 75);

echo $car->getDetails();
echo "\n";
echo $electricCar->getDetails();

?>

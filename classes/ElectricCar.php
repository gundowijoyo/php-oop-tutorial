<?php

require_once 'Car.php';

class ElectricCar extends Car {
    public $batteryCapacity;

    public function __construct($brand, $model, $color, $batteryCapacity) {
        parent::__construct($brand, $model, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getDetails() {
        return parent::getDetails() . " Ini memiliki kapasitas baterai " . $this->batteryCapacity . " kWh.";
    }
}
?>

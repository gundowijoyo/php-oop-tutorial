<?php

class Car {
    public $brand;
    public $model;
    public $color;

    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function getDetails() {
        return "ini adalah mobil" . $this->color . " " . $this->brand . " " . $this->model . ".";
    }
}
?>

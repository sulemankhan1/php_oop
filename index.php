<?php

class Car {

  private $name;
  private $color;
  private $model;


  public function setCarName($carname) {
    $this->name = $carname;
  }
  public function getCarName() {
    return $this->name;
  }

  public function setCarColor($color) {
    $this->color = $color;
  }
  public function getCarColor() {
    return $this->color;
  }

  public function setCarModel($model) {
    $this->model = $model;
  }
  public function getCarModel() {
    return $this->model;
  }

  public function getCarDetails() {
    return "
    <h1>Name: $this->name</h1>
    <h1>Color: $this->color</h1>
    <h1>Model: $this->model</h1>
    ";
  }

}


$vitz = new Car();
$vitz->setCarName("Vitz");
$vitz->setCarColor("Red");
$vitz->setCarModel("2020");


$cultus = new Car();
$cultus->setCarName("Cultus");
$cultus->setCarColor("white");
$cultus->setCarModel("2015");


echo $vitz->getCarDetails();

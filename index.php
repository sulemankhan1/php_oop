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

}


$vitz = new Car();
$vitz->setCarName("Vitz");
$vitz->setCarColor("Red");
$vitz->setCarModel("2020");


$cultus = new Car();
$cultus->setCarName("Cultus");
$cultus->setCarColor("white");
$cultus->setCarModel("2015");


echo $cultus->getCarModel();
